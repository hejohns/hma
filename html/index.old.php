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


$realm = 'Restricted area';

//user => password
$users = array('admin' => 'mypass', 'guest' => 'guest');
?>
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
  </body>
<?php
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
        else{
                if(isset($_POST))
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

