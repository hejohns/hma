<?php
include "../config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
//request with no credentials	
    header('WWW-Authenticate: Basic realm="REALM"');
    header('HTTP/1.1 401 Unauthorized');
    echo '
<style>
@media all and (orientation:portrait) {

    .wrapper {
	width: 80%;
	height: 80%;
	margin: 10% 10% 10% 10%;
        display: grid;
        text-align: center;
        grid-template-areas: "bigButtonTop"
       			     "bigButtonBottom";
    }

    .bigButtonTop {
        display: block;
        margin: 5% 5% 0;
        border: none;
        background-color: skyblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonTop;
    }     

    .bigButtonTop:hover {
        background-color: slategrey;
        color: black;
    }
    .bigButtonBottom {
        display: block;
        margin: 0 5% 5%;
        border: none;
        background-color: steelblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonBottom;
    }

     .bigButtonBottom:hover {
        background-color: sienna;
        color: black;
    }
     input {
        -webkit-appearance: none;
    }
}
@media all and (orientation:landscape) {
    .wrapper {
	width: 80%;
	height: 80%;
	margin: 10% 10% 10% 10%;
        display: grid;
	text-align: center;
	grid-template-columns: 1fr 1fr;
        grid-template-areas: "bigButtonTop bigButtonBottom";
    }

    .bigButtonTop {
        display: block;
        margin: 5% 0 5% 5%;
        border: none;
        background-color: skyblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonTop;
    }     

    .bigButtonTop:hover {
        background-color: slategrey;
        color: black;
    }
    .bigButtonBottom {
        display: block;
        margin: 5% 5% 5% 0;
        border: none;
        background-color: steelblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonBottom;
    }

     .bigButtonBottom:hover {
        background-color: sienna;
        color: black;
    }
     input {
        -webkit-appearance: none;
    }
}

</style>
<body>
	<div class="wrapper">
		<input type="button" class="bigButtonTop" value="Click to" onClick="window.location.href=window.location.href">
		<input type="button" class="bigButtonBottom" value="Log in" onClick="window.location.href=window.location.href">
	</div>
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
//(same as above log in page)
	echo '
<style>
@media all and (orientation:portrait) {

    .wrapper {
	width: 80%;
	height: 80%;
	margin: 10% 10% 10% 10%;
        display: grid;
        text-align: center;
        grid-template-areas: "bigButtonTop"
       			     "bigButtonBottom";
    }

    .bigButtonTop {
        display: block;
        margin: 5% 5% 0;
        border: none;
        background-color: skyblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonTop;
    }     

    .bigButtonTop:hover {
        background-color: slategrey;
        color: black;
    }
    .bigButtonBottom {
        display: block;
        margin: 0 5% 5%;
        border: none;
        background-color: steelblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonBottom;
    }

     .bigButtonBottom:hover {
        background-color: sienna;
        color: black;
    }
     input {
        -webkit-appearance: none;
    }
}
@media all and (orientation:landscape) {
    .wrapper {
	width: 80%;
	height: 80%;
	margin: 10% 10% 10% 10%;
        display: grid;
	text-align: center;
	grid-template-columns: 1fr 1fr;
        grid-template-areas: "bigButtonTop bigButtonBottom";
    }

    .bigButtonTop {
        display: block;
        margin: 5% 0 5% 5%;
        border: none;
        background-color: skyblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonTop;
    }     

    .bigButtonTop:hover {
        background-color: slategrey;
        color: black;
    }
    .bigButtonBottom {
        display: block;
        margin: 5% 5% 5% 0;
        border: none;
        background-color: steelblue;
        color: black;
        font-size: 800%;
        cursor: pointer;
        text-align: center;
	grid-area: bigButtonBottom;
    }

     .bigButtonBottom:hover {
        background-color: sienna;
        color: black;
    }
     input {
        -webkit-appearance: none;
    }
}

</style>
<body>
	<div class="wrapper">
		<input type="button" class="bigButtonTop" value="Click to" onClick="window.location.href=window.location.href">
		<input type="button" class="bigButtonBottom" value="Log in" onClick="window.location.href=window.location.href">
	</div>
</body>
';
	die();
    }
}
?>
