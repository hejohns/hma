<?php
include "../config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
//request with no credentials	
    header('WWW-Authenticate: Basic realm="REALM"');
    header('HTTP/1.1 401 Unauthorized');
    echo '
<style>
.bigButton {
    display: block;
    width: 100%;
    height: 100%;
    border: none;
    background-color: #4CAF50;
    color: white;
    padding-top: 30%;
    padding-bottom: 30%;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.bigButton:hover {
    background-color: #ddd;
    color: black;
}
</style>
<body>
	<input type="button" class="bigButton" value="Log In" onClick="window.location.href=window.location.href">
</body>
';
    die();
} 
else {
    if (($_SERVER['PHP_AUTH_USER'] == $indexUsername) && ($_SERVER['PHP_AUTH_PW'] == $indexPassword)){
//request with correct credentials	   
	    include "../main.php";
    }
    else{
//request with incorrect credentials	    
	header('WWW-Authenticate: Basic realm="REALM"');
	header('HTTP/1.1 401 Unauthorized');
	echo '


';
	die();
    }
}
?>
