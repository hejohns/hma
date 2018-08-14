<!DOCTYPE html>
<html>
    <head>
	<style>
	    body {
      	        background-color: ivory;
 	        text-align: center;
	    }
	    button {
		font-size: 4vw;
	    }
	    .wrapper {
		width: 100vw;
		height: 100vh;
		margin: auto;
		display: grid;
		grid-template-rows: 1fr 3fr 3fr 1fr;
		grid-template-areas: 
			"header" 
			"quickAccess" 
			"main"
			"footer";
            }

            .header {
                text-align: center;
		margin: auto;
                grid-area: header;
            }

            .quickAccess {
                text-align: center;
		    margin: auto;
                grid-area: quickAccess;
            }

            .main {
                text-align: center;
		margin: auto;
                grid-area: main;
            }
	    .footer {
	        text-align: center;
		margin: auto;
	        grid-area: footer;
	    }

            @media (min-width: 981px) {
		button {
		    font-size: 3vw;
		}
		.wrapper {
		    width: 100vw;
		    height: 100vh;
		    margin: auto;
                    display: grid;
		    grid-template-columns: 1fr 1fr;
		    grid-template-rows: 1fr 3fr 1fr;
                    grid-template-areas: "header header" "quickAccess main" "footer footer";
                }

                .header {
		    text-align: center;
		    margin: auto;
                    grid-area: header;
                }

                .quickAccess {
                    text-align: center;
		    margin: auto;
                    grid-area: quickAccess;
                }

                .main {
                    text-align: center;
		    margin: auto;
                    grid-area: main;
		}
		.footer {
		    text-align: center;
		    margin: auto;
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
	    </div>
	    <div class="quickAccess">
		<button onclick="logOut()">Log Out</button>
		<script>
			function logOut(){
				var xhttp = new XMLHttpRequest();

		<?php
/////////////////////////////////////////////////////////////////////
//super ugly logout function that sends an incorrect request with javascript.
/////////////////////////////////////////////////////////////////////
			include "config.php";
		echo
			'
				xhttp.open("GET", "' .$domain . '", true, "incorrect", "credentials");
				xhttp.send();';
		?>
				document.write('<style>input{width:100vw;height:50vh;margin:auto;font-size:50px;-webkit-appearance:none;}body{font-size:50px;}</style><body>You are logged out. To log back in, press the button below.</body><input type= "button" value= "Log In" onClick= "window.location.href=window.location.href">')
			}
		</script>
<!-- /////////////////////////////////////////////////////////////////-->
<!-- end of logout function -->
<!-- /////////////////////////////////////////////////////////////////-->
		<form method="POST">
			<button name="listOut" value="TRUE" type="submit">List All Checked Out</button>
		</form>
                <button type="button">List All Check-out (Alphabetical)</button>
                <button type="button">List Inventory</button>
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
	    </div>
	    <div class="footer">
		<?php
// Create connection
      		$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
  	        if ($conn->connect_error) {
     		      die("Connection failed: " . $conn->connect_error);
       		}
		if ($_POST["listOut"] == TRUE) {
              	$sql = "SELECT * FROM $loaned ORDER BY name";
              	$result = $conn->query($sql);
              	echo '<table>';
                      $sql2 = "SHOW COLUMNS FROM $loaned";
		      $result2 = $conn->query($sql2);
		      echo '<tr>';
                      while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                      }
                      echo '</tr>';
              	      while ($row = $result->fetch_assoc()){
                      $sql2 = "SHOW COLUMNS FROM $loaned";
                      $result2 = $conn->query($sql2);
                      echo '<tr>';
                      while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row[$row2["Field"]];
                              echo '</td>';
                      }
                      echo '</tr>';
              	      }
              	echo '</table>';
		}
//close connection
      		$conn->close();
		?>
	    </div>
        </div>
    </body>
</html>

