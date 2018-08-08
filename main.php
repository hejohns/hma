<!DOCTYPE html>
<html>
    <head>
	<style>
	    body {
      	        background-color: ivory;
 	        text-align: center;
      	    }
            .wrapper {
                display: grid;
		grid-template-areas: 
			"header" 
			"quickAccess" 
			"main"
			"footer";
            }

            .header {
                text-align: center;
                grid-area: header;
            }

            .quickAccess {
                text-align: center;
                grid-area: quickAccess;
            }

            .main {
                text-align: center;
                grid-area: main;
            }
	    .footer {
	        text-align: center;
	        grid-area: footer;
	    }

            @media (min-width: 600px) {
                .wrapper {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-areas: "header header" "quickAccess main" "footer footer";
                }

                .header {
                    text-align: center;
                    grid-area: header;
                }

                .quickAccess {
                    text-align: center;
                    grid-area: quickAccess;
                }

                .main {
                    text-align: center;
                    grid-area: main;
		}
		.footer {
		    text-align: center;
		    grid-area: footer;
		}
            }
        </style>
        <title>main.php</title>
    </head>
    <body>
        <div class="wrapper">
	    <div class="header">
		HMA INVENTORY SYSTEM 
		<br>
		<br>
	    </div>
	    <div class="quickAccess">
		<?php
/////////////////////////////////////////////////////////////////////
//super ugly logout function that sends an incorrect request with javascript.
/////////////////////////////////////////////////////////////////////
			include "config.php";

		echo
		'<button onclick="logOut()">Log Out</button>
		<script>
			function logOut(){
				var xhttp = new XMLHttpRequest();
				xhttp.open("GET", "' .$domain . '", true, "incorrect", "credentials");
				xhttp.send();';
		?>
				document.write('<div>You are logged out. To log back in, press the button below.</div><input type= "button" value= "Log In" onClick= "window.location.href=window.location.href">')
			}
		</script>
<!-- /////////////////////////////////////////////////////////////////-->
<!-- end of logout function -->
<!-- /////////////////////////////////////////////////////////////////-->
		<button type="button">List All Checked-out</button>
                <button type="button">List All Check-out (Alphabetical)</button>
                <button type="button">List Inventory</button>
                <br>
                <br>
            </div>
            <div class="main">
                <form action="" method="POST">
                    <select name="formInit">
                        <option value="1">Search Student</option>
                        <option value="2">Check Out</option>
                        <option value="3">Check In</option>
                    </select>
                    Name <input type="text" name="name" id="name" value="">
                    <select name="form2">
                        <option value="1">Shirt</option>
                        <option value="2">Pants</option>
                        <option value="3">Dress</option>
                    </select>
                    <input type="submit">
		</form>
		<br>
		<br>
	    </div>
	    <div class="footer">This is a footer</div>
        </div>
    </body>
</html>

