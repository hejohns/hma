<!DOCTYPE html>
<html>
    <head>
	<style>
	    body {
      	        background-color: ivory;
 	        text-align: center;
	    }
	    button {
		-webkit-appearance: none;
		font-size: 4vw;
	    }
	    .wrapper {
		width: 100vw;
		height: 100vh;
		margin: auto;
		display: grid;
		grid-template-rows: 1fr 6fr 3fr 10fr;
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
		margin: 0 auto auto;
	        grid-area: footer;
	    }
	    table, th, td {
  		border: 1px solid black;
   		border-collapse: collapse;
  		text-align: center;
		vertical-align: center;
      	    }
	    table {
		margin: 0 auto auto; 
		font-size: 5vw;
	    }
	    tr:nth-child(even) {
		background-color: #ffffcc;
	    }
	    tr:hover {
		background-color: #ADFF2F;
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
		    grid-template-rows: 1fr 9fr 10fr;
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
		    grid-area: footer;
		}
            }
        </style>
        <title>main.php</title>
    </head>
    <body>
        <div class="wrapper">
	    <div class="header">
		<p>HMA INVENTORY SYSTEM</p>
		<p>Remeber to use t/f, not y/n</p>
	    </div>
	    <div class="quickAccess">
		<button onclick="logOut()">Log Out</button>
		<hr>
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
			<button name="listOutM" value="TRUE" type="submit">List All Checked Out (MALE)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listOutF" value="TRUE" type="submit">List All Checked Out (FEMALE)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listInPants" value="TRUE" type="submit">List Checked In (PANTS)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listInShirts" value="TRUE" type="submit">List Checked In (SHIRTS)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listInVests" value="TRUE" type="submit">List Checked In (VESTS)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listInJackets" value="TRUE" type="submit">List Checked In (JACKETS)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listInDresses" value="TRUE" type="submit">List Checked In (DRESSES)</button>
		</form>
		<br>
		<form method="POST">
			<button name="listUnpaid" value="TRUE" type="submit">List Unpaid</button>
		</form>
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
	    </div>
	    <div class="footer">
		<?php
// Create connection
      		$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
  	        if ($conn->connect_error) {
     		      die("Connection failed: " . $conn->connect_error);
		}
//cron
	//correct in value for tables based on outM/F values.
		$sql = "SELECT * FROM $outM";
		$result = $conn->query($sql);
		$sql2 = "UPDATE hma.pants SET `in`='t'";
		$result2 = $conn->query($sql2);
		$sql2 = "UPDATE hma.shirts SET `in`='t'";
		$result2 = $conn->query($sql2);	
		$sql2 = "UPDATE hma.vests SET `in`='t'";
		$result2 = $conn->query($sql2);
		$sql2 = "UPDATE hma.jackets SET `in`='t'";
		$result2 = $conn->query($sql2);
		$sql9 = "SELECT * FROM $outF";
		$result9 = $conn->query($sql9); 
		$sql2 = "UPDATE hma.dresses SET `in`='t'";
		$result2 = $conn->query($sql2);
		while ($row = $result->fetch_assoc()){
			if ($row["pants"] == ''){
			}
			else {
				$sql3 = "UPDATE hma.pants SET `in`='f' WHERE `index`=" . $row["pants"];
				$result3 = $conn->query($sql3);
				$sql3 = "UPDATE hma.shirts SET `in`='f' WHERE `index`=" . $row["shirt"];
				$result3 = $conn->query($sql3);
				$sql3 = "UPDATE hma.vests SET `in`='f' WHERE `index`=" . $row["vest"];
				$result3 = $conn->query($sql3);	
				$sql3 = "UPDATE hma.jackets SET `in`='f' WHERE `index`=" . $row["jacket"];
				$result3 = $conn->query($sql3);
			}
		}
		while ($row2 = $result9->fetch_assoc()){
			if ($row2["dress"] == ''){
			}
			else {
				$sql8 = "UPDATE hma.dresses SET `in`='f' WHERE `index`=" . $row2["dress"];
				$result8 = $conn->query($sql8);
			}
		}
//list outM alphabetical
		if ($_POST["listOutM"] == TRUE) {
              	$sql = "SELECT * FROM $outM ORDER BY name";
              	$result = $conn->query($sql);
              	echo '<table>';
                      $sql2 = "SHOW COLUMNS FROM $outM";
		      $result2 = $conn->query($sql2);
		      echo '<tr>';
                      while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                      }
                      echo '</tr>';
              	      while ($row = $result->fetch_assoc()){
                      $sql2 = "SHOW COLUMNS FROM $outM";
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
//list outF alphabetical
		if ($_POST["listOutF"] == TRUE) {
              	$sql = "SELECT * FROM $outF ORDER BY name";
              	$result = $conn->query($sql);
              	echo '<table>';
                      $sql2 = "SHOW COLUMNS FROM $outF";
		      $result2 = $conn->query($sql2);
		      echo '<tr>';
                      while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                      }
                      echo '</tr>';
              	      while ($row = $result->fetch_assoc()){
                      $sql2 = "SHOW COLUMNS FROM $outF";
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

//list inventory PANTS
		if ($_POST["listInPants"] == TRUE) {
			$sql = "SELECT * FROM hma.pants WHERE `in`='t' ORDER BY `index`";
			$result = $conn->query($sql);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM hma.pants";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM hma.pants";
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
//list inventory SHIRTS
		if ($_POST["listInShirts"] == TRUE) {
			$sql = "SELECT * FROM hma.shirts WHERE `in`='t' ORDER BY `index`";
			$result = $conn->query($sql);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM hma.shirts";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM hma.shirts";
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
//list inventory VESTS
		if ($_POST["listInVests"] == TRUE) {
			$sql = "SELECT * FROM hma.vests WHERE `in`='t' ORDER BY `index`";
			$result = $conn->query($sql);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM hma.vests";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM hma.vests";
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
//list inventory JACKETS
		if ($_POST["listInJackets"] == TRUE) {
			$sql = "SELECT * FROM hma.jackets WHERE `in`='t' ORDER BY `index`";
			$result = $conn->query($sql);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM hma.jackets";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM hma.jackets";
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
//list inventory DRESSES
		if ($_POST["listInDresses"] == TRUE) {
			$sql = "SELECT * FROM hma.dresses WHERE `in`='t' ORDER BY `index`";
			$result = $conn->query($sql);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM hma.dresses";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM hma.dresses";
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
//list unpaid
		if ($_POST["listUnpaid"] == TRUE){
			$sql9 = "SELECT * FROM $outM WHERE `paid`='f' ORDER BY `name`";
			$sql8 = "SELECT * FROM $outF WHERE `paid`='f' ORDER BY `name`";
			$result9 = $conn->query($sql9);
			$result8 = $conn->query($sql8);
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM $outM";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result9->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM $outM";
                        $result2 = $conn->query($sql2);
                        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row9[$row2["Field"]];
                              echo '</td>';
                        }
                        echo '</tr>';
              	        }
  	                echo '</table>';
			echo '<table>';
                        $sql2 = "SHOW COLUMNS FROM $outF";
		        $result2 = $conn->query($sql2);
		        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row2["Field"];
			      echo '</td>';
                        }
                        echo '</tr>';
              	        while ($row = $result->fetch_assoc()){
                        $sql2 = "SHOW COLUMNS FROM $outF";
                        $result2 = $conn->query($sql2);
                        echo '<tr>';
                        while ($row2 = $result2->fetch_assoc()){
                              echo '<td>';
                              echo $row8[$row2["Field"]];
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

