<html>
<body>
<?php
$user = $_POST['usern'];
$pass = $_POST['passw'];

if($user == "hma"
&& $pass == "fairfieldpass")
{
        include("../main.php");
}
else
{
        if(isset($_POST))
        {

echo '
            <form method="POST" action="index.php">
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
