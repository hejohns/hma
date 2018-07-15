<html>
<?php
echo "<head><style>";
include "../style.css";
echo "</style></head>";
?>
<body>
<?php
include "../config.php";
$user = $_POST['usern'];
$pass = $_POST['passw'];

if($user == $indexUsername
&& $pass == $indexPassword
&& $_POST['indexInit'] == "1")
{
        include("../main.php");
}
else
{
        
       if($user == $indexUsername
&& $pass == $indexPassword
&& $_POST['indexInit'] == "2")
{
        include("../form.php");
}
        else {
                $log = fopen("../log.txt", 'a');
                $txt = $_SERVER['REMOTE_ADDR'] . "\n";
                fwrite($log, $txt);
                fclose($log);
                $log2 = fopen("../log.txt", 'r');
                $lines = 0;
                while (!feof($log2)) {
                        $lines += substr_count(fread($log2, 8192), "\n");
                }
                fclose($log2);
                echo $lines;
                $logSuccess = fopen("../logSuccess.txt", 'r');
                $timeOfLastLogIn = fread($logSuccess, 8192);
                echo time();
                if ((time() - $timeOfLastLogIn > 10) && file_exists("../logSuccess.txt")) {unlink("../log.txt");}
                if (!($lines > 50))
                {

echo '
            <form method="POST" action="index.php">
            <input type="hidden" name="indexInit" value="1" />
            Username <input type="text" name="usern"></input><br>
            Password <input type="password" name="passw"></input><br>
            <input type="submit" name="submit" value="Submit"></input>
            </form>
';     
                }

        }
}
?>
</body>
</html>
