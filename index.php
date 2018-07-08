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
&& $_POST['indexInit'] == 1)
{
        include("../main.php");
}
if($user == $indexUsername
&& $pass == $indexPassword
&& $_POST['indexInit'] == 2)
{
        include("../form.php");
}
else
{
        if(isset($_POST))
        {

echo '
            <form method="POST" action="index.php">
            <input type="hidden" name="indexInit" value="1" />
            User <input type="text" name="usern"></input><br>
            Pass <input type="password" name="passw"></input><br>
            <input type="submit" name="submit" value="Submit"></input>
            </form>
';
}
}
?>
</body>
</html>
