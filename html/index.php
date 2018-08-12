<?php
include "../config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
//request with no credentials	
    header('WWW-Authenticate: Basic realm="REALM"');
    header('HTTP/1.1 401 Unauthorized');
    echo '
<style>
.bigButtonTop {
    display: block;
    margin: 5% 5% 0;
    width: 90%;
    height: 45%;
    border: none;
    background-color: skyblue;
    color: black;
    font-size: 800%;
    cursor: pointer;
    text-align: center;
    padding-top: 40%;
}

.bigButtonTop:hover {
    background-color: slategrey;
    color: black;
}
.bigButtonBottom {
    display: block;
    margin: 0 5% 5%;
    width: 90%;
    height: 45%;
    border: none;
    background-color: steelblue;
    color: black;
    font-size: 800%;
    cursor: pointer;
    text-align: center;
    padding-bottom: 70%;
}

.bigButtonBottom:hover {
    background-color: sienna;
    color: black;
}
input {
    -webkit-appearance: none;
}
</style>
<body>
	<input type="button" class="bigButtonTop" value="Click to" onClick="window.location.href=window.location.href">
	<input type="button" class="bigButtonBottom" value="Log in" onClick="window.location.href=window.location.href">
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
<style>
.bigButtonTop {
    display: block;
    margin: 5% 5% 0;
    width: 90%;
    height: 45%;
    border: none;
    background-color: skyblue;
    color: black;
    font-size: 800%;
    cursor: pointer;
    text-align: center;
    padding-top: 40%;
}

.bigButtonTop:hover {
    background-color: slategrey;
    color: black;
}
.bigButtonBottom {
    display: block;
    margin: 0 5% 5%;
    width: 90%;
    height: 45%;
    border: none;
    background-color: steelblue;
    color: black;
    font-size: 800%;
    cursor: pointer;
    text-align: center;
    padding-bottom: 70%;
}

.bigButtonBottom:hover {
    background-color: sienna;
    color: black;
}
input {
    -webkit-appearance: none;
}
</style>
<body>
	<input type="button" class="bigButtonTop" value="Click to" onClick="window.location.href=window.location.href">
	<input type="button" class="bigButtonBottom" value="Log in" onClick="window.location.href=window.location.href">
</body>
';
	die();
    }
}
?>
