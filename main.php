<!DOCTYPE html>
<html>
    <head>
        <title>hmaDB</title>
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
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: 1fr 1fr;
		grid-template-areas: "mainTop"
				     "mainBottom";
	    }
		.mainTop {
		    text-align: center;
		    margin: auto;
		    grid-area: mainTop;
		}
		.mainBottom {
		    text-align: center;
		    margin: auto;
		    grid-area: mainBottom;
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
		    grid-template-areas: "header header" 
					 "quickAccess main" 
					 "footer footer";
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
		    display: grid;
		    grid-template-columns: 1fr;
		    grid-template-rows: 1fr 1fr;
		    grid-template-areas: "mainTop"
					"mainBottom";
		}
		.mainTop {
		    text-align: center;
		    margin: auto;
		    grid-area: mainTop;
		}
		.mainBottom {
		    text-align: center;
		    margin: auto;
		    grid-area: mainBottom;
		}
		.footer {
		    text-align: center;
		    grid-area: footer;
		}
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
	    <div class="header">
		<b>HMA INVENTORY SYSTEM</b>
		<p>For assistance, contact Johnson He at [johnson.he2009@gmail.com] or [734-274-3757]</p>
		<p>Checkout should be functioning properly. Ignore paid, it's a extraneous "feature". </p>
		<p>Search works, probably? Haven't tried it after all the recent changes.</p>
		<p>The buttons are mostly usless rn, but they work. </p>
		<p>!Everything is lowercase!</p>
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
			document.write('<style>input{width:90vw;height:60vh;margin:auto;font-size:50px;-webkit-appearance:none;}body{font-size:50px;}</style><body>You are logged out. To log back in, press the button below.</body><input type= "button" value= "Log In" onClick= "window.location.href=window.location.href">')
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
		<div class="mainTop"> 
		    <p>Multiple item check out</p>
		    <form action="" method="POST">
			<input type="hidden" name="formInit" value="multipleCheckOut">
			M/F <select name="m/f">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<br>
	              	First Name <input type="text" name="firstName" id="firstName" value="">
			Last Name <input type="text" name="lastName" id="lastName" value="">
			<br>
			Pants <input type="text" name="pantsIndex" id="pantsIndex" value="">
			<br>
			Cummerbund <input type="text" name="cummerbundIndex" id="cummerbundIndex" value="">
			<br>
			Vest <input type="text" name="vestIndex" id="vestIndex" value="">
			<br>
			Jacket <input type="text" name="jacketIndex" id="jacketIndex" value="">
			<br>
			Dress <input type="text" name="dressIndex" id="dressIndex" value="">
			<br>
			<input type="submit">
		    </form>
		    <p>Single item check out</p>
          	    <form action="" method="POST">
               	     	<select name="formInit">
               	     	    <option value="checkOut">Check Out</option>
               	     	    <option value="checkIn">Check In</option>
               	      	    <option value="searchStudent">Search Student</option>
			</select>
			<br>
			<br>
               	        First Name <input type="text" name="firstName" id="firstName" value="">
			Last Name <input type="text" name="lastName" id="lastName" value="">
			<br>
			<br>
               	        <select name="clothingItem">
               	            <option value="pants">Pants</option>
			    <option value="shirt">Shirt</option>
			    <option value="cummerbund">Cummerbund</option>
               	            <option value="vest">Vest</option>
               	            <option value="jacket">Jacket</option>
               	            <option value="dress">Dress</option>
			</select>
			Index <input type="text" name="index" id="index" value="">
			   Paid? <select name="paid">
					<option value="t">true</option>
					<option value="f">false</option>
				</select>
			<input type="submit">
		    </form>
		</div>
		<div class="mainBottom">
		    <p>Made by:</p>
		    <p>Umang Bhojani [umang.bhojani@yahoo.com]<p/>
		    <p>Johnson He [johnson.he2009@gmail.com]</p>
		    <p>Nihar Joshi [nihardjoshi@gmail.com]</p>
		    <p>Nathan Lee [nathan0320lee@gmail.com]</p>
		    <p>Peter Stenger [peter.a.stenger@gmail.com]</p>
		</div>
	    </div>
	    <div class="footer">
		<?php
// Create connection
      		$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
  	        if ($conn->connect_error) {
     		      die("Connection failed: " . $conn->connect_error);
		}
//"cron"
	//correct in value for tables based on outM/F values.
		$sql = "SELECT * FROM $outM";
		$result = $conn->query($sql);
		$sql2 = "UPDATE hma.pants SET `in`='t'";
		$result2 = $conn->query($sql2);
		$sql2 = "UPDATE hma.cummerbunds SET `in`='t'";
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
				$sql3 = "UPDATE hma.pants SET `in`='f' WHERE `index`=" . $row["pants"];
				$result3 = $conn->query($sql3);
				$sql3 = "UPDATE hma.cummerbunds SET `in`='f' WHERE `index`=" . $row["cummerbund"];
				$result3 = $conn->query($sql3);
				$sql3 = "UPDATE hma.shirts SET `in`='f' WHERE `index`=" . $row["shirt"];
				$result3 = $conn->query($sql3);
				$sql3 = "UPDATE hma.vests SET `in`='f' WHERE `index`=" . $row["vest"];
				$result3 = $conn->query($sql3);	
				$sql3 = "UPDATE hma.jackets SET `in`='f' WHERE `index`=\"" . $row["jacket"] . "\"";
				$result3 = $conn->query($sql3);
		}
		while ($row2 = $result9->fetch_assoc()){
				$sql8 = "UPDATE hma.dresses SET `in`='f' WHERE `index`=\"" . $row2["dress"] . "\"";
				$result8 = $conn->query($sql8);
		}
//list outM alphabetical
		if ($_POST["listOutM"] == TRUE) {
              	$sql = "SELECT * FROM $outM ORDER BY lastName";
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
              	$sql = "SELECT * FROM $outF ORDER BY lastName";
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
			echo"Pants";
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
			echo "Shirts";
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
			echo "Vests";
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
			echo "Jackets";
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
			echo "Dresses";
			$sql = "SELECT * FROM hma.dresses WHERE `in`='t' ORDER BY `size`";
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
			$sql9 = "SELECT * FROM $outM WHERE `paid`='f' ORDER BY `lastName`";
			$sql8 = "SELECT * FROM $outF WHERE `paid`='f' ORDER BY `lastName`";
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
              	        while ($row9 = $result9->fetch_assoc()){
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
              	        while ($row8 = $result8->fetch_assoc()){
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
//data manipulation AKA mainTop
	//multiple line check out
		if ($_POST["formInit"] == "multipleCheckOut"){
			if ($_POST["m/f"] == "male"){
				$itemLoopTrackerM = array(
					0=>"pants",
					1=>"cummerbund",
					2=>"vest",
					3=>"jacket",
				);
				for($index = 0;$index <= 3;$index++){
				if ($itemLoopTrackerM[$index] == "pants") {
				$sql = "SELECT * FROM hma.pants WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["pantsIndex"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `pants` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, ?, NULL, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `pants` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Pants #" . $_POST["pantsIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Pants #" . $_POST["pantsIndex"] . " does not exist";
				}
			}
			elseif ($itemLoopTrackerM[$index] == "shirt") {
				$sql = "SELECT * FROM hma.shirts WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["shirtIndex"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `shirt` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, ?, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `shirt` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Shirt #" . $_POST["shirtIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Shirt #" . $_POST["shirtIndex"] . " does not exist";
				}
			}
			elseif ($itemLoopTrackerM[$index] == "cummerbund") {
				$sql = "SELECT * FROM hma.cummerbunds WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["cummerBundIndex"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `cummerbund` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, ?, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `cummerbund` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Cummerbund #" . $_POST["cummerbundIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Cummerbund #" . $_POST["cummerbundIndex"] . " does not exist";
				}
			}
			elseif ($itemLoopTrackerM[$index] == "vest") {
				$sql = "SELECT * FROM hma.vests WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["vestIndex"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `vest` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, NULL, NULL, ?, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `vest` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Vest #" . $_POST["vestIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Vest #" . $_POST["vestIndex"] . " does not exist";
				}
			}
			elseif ($itemLoopTrackerM[$index] == "jacket") {
				$sql = "SELECT * FROM hma.jackets WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (string) $_POST["jacketIndex"];
				$query->bind_param('s', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `jacket` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('sss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, NULL, NULL, NULL, ?, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssss', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `jacket` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('s', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Jacket #" . $_POST["jacketIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Jacket #" . $_POST["jacketIndex"] . " does not exist";
				}
			}
						else {
				echo 'Error: $formInit = "checkOut", $clothingItem did not trigger.';
			}

				echo '<br>';
				}
			}
			if ($_POST["m/f"] == "female"){
				$sql = "SELECT `index`, `in` FROM hma.dresses WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (string) $_POST["dressIndex"];
				$query->bind_param('s', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$sql9 = "SELECT * FROM hma.outF WHERE `firstName` = ?  AND `lastName` = ?";
				$query9 = $conn->prepare($sql9);
				$query9->bind_param('ss', $indexPOST, $_POST["lastName"]);
				$query9->execute();
				$result9 = $query9->get_result();
				$existingEntry = $result9->num_rows;
				$query9->close();
				if ((!empty($row["index"]) && $row["in"] == 't')){
					$sql4 = "DELETE FROM `outF` WHERE `firstName` = ? AND `lastName` = ?";
					$query4 = $conn->prepare($sql4);
					$query4->bind_param('ss', $_POST["firstName"], $_POST["lastName"]);
					$query4->execute();
					$query4->close();
					$sql2 = "INSERT INTO `outF` VALUES (?, ?, ?, 't')";
					$query2 = $conn->prepare($sql2);
					$query2->bind_param('sss', $_POST["firstName"], $_POST["lastName"], $_POST["dressIndex"]);
					$query2->execute();
					$query->close();
					$rowsAffected2 = $query2->affected_rows;
					$query2->close();
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "$rowsAffected2 rows affected!";
					}
				}
				elseif ((!empty($row["index"]) && $row["in"] == 'f') && (empty($existingEntry)) ){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outF WHERE `dress` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('s', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Dress #" . $_POST["dressIndex"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				elseif ((!empty($row["index"]) && $row["in"] == 'f') && (!empty($existingEntry)) ){
					$sql4 = "DELETE FROM `outF` WHERE `firstName` = ? AND `lastName` = ?";
					$query4 = $conn->prepare($sql4);
					$query4->bind_param('ss', $_POST["firstName"], $_POST["lastName"]);
					$query4->execute();
					$query4->close();
					$sql2 = "INSERT INTO `outF` VALUES (?, ?, ?, ?)";
					$query2 = $conn->prepare($sql2);
					$query2->bind_param('ssss', $_POST["firstName"], $_POST["lastName"], $_POST["dressIndex"], $_POST["paid"]);
					$query2->execute();
					$query->close();
					$rowsAffected2 = $query2->affected_rows;
					$query2->close();
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "$rowsAffected2 rows affected!2";
					}

				}
				else {
					$query->close();
					echo "Dress #" . $_POST["dressIndex"] . " does not exist";
				}

			}
		} 
	//search 
	//I would like to apologize for the monstrosity that  is below. I do not think cleaning it up would be a wise use of time at this point, since the search feature works as intended.
		if ($_POST["formInit"] == "searchStudent") {
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			if (!empty($firstName) && !empty($lastName)) {
				$sql = "SELECT * FROM $dbName.$outM WHERE `firstName` LIKE '$firstName%' AND `lastName` LIKE '$lastName%' ORDER BY `lastName`";
				$result = $conn->query($sql);
				$sql2 = "SELECT * FROM $dbName.$outF WHERE `firstName` LIKE '$firstName%' AND `lastName` LIKE '$lastName%' ORDER BY `lastName`";
				$result2 = $conn->query($sql2);
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outM";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row = $result->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outM";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outF";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row2 = $result2->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outF";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row2[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';	
			}
			else {
				if (!empty($firstName) && empty($lastName)) {
				$sql = "SELECT * FROM $dbName.$outM WHERE `firstName` LIKE '$firstName%' ORDER BY `lastName`";
				$result = $conn->query($sql);
				$sql2 = "SELECT * FROM $dbName.$outF WHERE `firstName` LIKE '$firstName%' ORDER BY `lastName`";
				$result2 = $conn->query($sql2);
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outM";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row = $result->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outM";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outF";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row2 = $result2->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outF";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row2[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';
				}
				else {
				if (empty($firstName) && !empty($lastName)) {
				$sql = "SELECT * FROM $dbName.$outM WHERE `lastName` LIKE '$lastName%' ORDER BY `lastName`";
				$result = $conn->query($sql);
				$sql2 = "SELECT * FROM $dbName.$outF WHERE `lastName` LIKE '$lastName%' ORDER BY `lastName`";
				$result2 = $conn->query($sql2);
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outM";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row = $result->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outM";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';
				echo '<table>';
					$sql3 = "SHOW COLUMNS FROM $outF";
					$result3 = $conn->query($sql3);
					echo '<tr>';
					while ($row3 = $result3->fetch_assoc()) {
						echo '<td>';
						echo $row3["Field"];
						echo '</td>';
					}
					echo '</tr>';
					while ($row2 = $result2->fetch_assoc()) {
						$sql3 = "SHOW COLUMNS FROM $outF";
						$result3 = $conn->query($sql3);
						echo '<tr>';
						while ($row3 = $result3->fetch_assoc()) {
							echo '<td>';
							echo $row2[$row3["Field"]];
							echo '</td>';
						}
						echo '</tr>';
					}
				echo '</table>';	

				}
				else {
					if (empty($firstName) && empty($lastName)) {
					}
					else {
						echo 'Error: search failed for unknown reasons.';
					}
				}
				}
			}
		}
//check out
		if ($_POST["formInit"] == "checkOut") {
			if ($_POST["clothingItem"] == "pants") {
				$sql = "SELECT * FROM hma.pants WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["index"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `pants` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, ?, NULL, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `pants` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Pants #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Pants #" . $_POST["index"] . " does not exist";
				}
			}
			elseif ($_POST["clothingItem"] == "shirt") {
				$sql = "SELECT * FROM hma.shirts WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["index"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `shirt` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, ?, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `shirt` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Shirt #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Shirt #" . $_POST["index"] . " does not exist";
				}
			}
			elseif ($_POST["clothingItem"] == "cummerbund") {
				$sql = "SELECT * FROM hma.cummerbunds WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["index"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `cummerbund` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, ?, NULL, NULL, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `cummerbund` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Cummerbund #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Cummerbund #" . $_POST["index"] . " does not exist";
				}
			}
			elseif ($_POST["clothingItem"] == "vest") {
				$sql = "SELECT * FROM hma.vests WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (int) $_POST["index"];
				$query->bind_param('i', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `vest` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('iss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, NULL, NULL, ?, NULL, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssis', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `vest` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('i', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Vest #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Vest #" . $_POST["index"] . " does not exist";
				}
			}
			elseif ($_POST["clothingItem"] == "jacket") {
				$sql = "SELECT * FROM hma.jackets WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (string) $_POST["index"];
				$query->bind_param('s', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$query->close();
				$sql9 = "SELECT * FROM `outM` WHERE `firstName`=?  AND `lastName`=?";
				$query9 = $conn->prepare($sql9);
				$firstName_POST = (string) $_POST["firstName"];
				$lastName_POST = (string) $_POST["lastName"];
				$query9->bind_param('ss', $firstName_POST, $lastName_POST);
				$query9->execute();
				$result9 = $query9->get_result();
				$row9 = $result9->fetch_assoc();
				if (!empty($row["index"]) && $row["in"] == 't'){
					if (!empty($row9["firstName"])){
					$sql2 = 'UPDATE hma.outM SET `jacket` = ? WHERE `firstName` = ? AND `lastName` = ?';
					$query2 = $conn->prepare($sql2);
					$firstName_POST = (string)$_POST["firstName"];
					$lastName_POST = (string) $_POST["lastName"];
					$query2->bind_param('sss', $indexPOST, $firstName_POST, $lastName_POST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					else {
						echo "Success";
					}
					}
					elseif (empty($row9["firstName"])) {
					$sql2 = "INSERT INTO `outM` (`firstName`, `lastName`, `pants`, `cummerbund`, `shirt`, `vest`, `jacket`, `paid`) VALUES (?, ?, NULL, NULL, NULL, NULL, ?, ?)";
						$query2 = $conn->prepare($sql2);
						$paidPOST = (string) $_POST["paid"];
					$query2->bind_param('ssss', $firstName_POST, $lastName_POST, $indexPOST, $paidPOST);
					$query2->execute();
					$rowsAffected2 = $query2->affected_rows;
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "Error code 748";
					}
				}
				else {
					echo "Error code 749";
				}
					$query->close();
					$query2->close();
				}
				elseif (!empty($row["index"]) && $row["in"] == 'f'){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outM WHERE `jacket` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('s', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Jacket #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				else {
					$query->close();
					echo "Jacket #" . $_POST["index"] . " does not exist";
				}
			}
			elseif ($_POST["clothingItem"] == "dress") {
				$sql = "SELECT `index`, `in` FROM hma.dresses WHERE `index`=?";
				$query = $conn->prepare($sql);
				$indexPOST = (string) $_POST["index"];
				$query->bind_param('s', $indexPOST);
				$query->execute();
				$result = $query->get_result();
				$row = $result->fetch_assoc();
				$sql9 = "SELECT * FROM hma.outF WHERE `firstName` = ?  AND `lastName` = ?";
				$query9 = $conn->prepare($sql9);
				$query9->bind_param('ss', $indexPOST, $_POST["lastName"]);
				$query9->execute();
				$result9 = $query9->get_result();
				$existingEntry = $result9->num_rows;
				$query9->close();
				if ((!empty($row["index"]) && $row["in"] == 't')){
					$sql4 = "DELETE FROM `outF` WHERE `firstName` = ? AND `lastName` = ?";
					$query4 = $conn->prepare($sql4);
					$query4->bind_param('ss', $_POST["firstName"], $_POST["lastName"]);
					$query4->execute();
					$query4->close();
					$sql2 = "INSERT INTO `outF` VALUES (?, ?, ?, ?)";
					$query2 = $conn->prepare($sql2);
					$query2->bind_param('ssss', $_POST["firstName"], $_POST["lastName"], $_POST["index"], $_POST["paid"]);
					$query2->execute();
					$query->close();
					$rowsAffected2 = $query2->affected_rows;
					$query2->close();
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "$rowsAffected2 rows affected!";
					}
				}
				elseif ((!empty($row["index"]) && $row["in"] == 'f') && (empty($existingEntry)) ){
					$sql3 = "SELECT `firstName`, `lastName` FROM hma.outF WHERE `dress` = ?";
					$query3 = $conn->prepare($sql3);
					$query3->bind_param('s', $indexPOST);
					$query3->execute();
					$result3 = $query3->get_result();
					$row3 = $result3->fetch_assoc();
					$query->close();
					$query3->close();
					echo "Dress #" . $_POST["index"] . " is currently checked out by " . $row3["firstName"] . " " . $row3["lastName"];
				}
				elseif ((!empty($row["index"]) && $row["in"] == 'f') && (!empty($existingEntry)) ){
					$sql4 = "DELETE FROM `outF` WHERE `firstName` = ? AND `lastName` = ?";
					$query4 = $conn->prepare($sql4);
					$query4->bind_param('ss', $_POST["firstName"], $_POST["lastName"]);
					$query4->execute();
					$query4->close();
					$sql2 = "INSERT INTO `outF` VALUES (?, ?, ?, ?)";
					$query2 = $conn->prepare($sql2);
					$query2->bind_param('ssss', $_POST["firstName"], $_POST["lastName"], $_POST["index"], $_POST["paid"]);
					$query2->execute();
					$query->close();
					$rowsAffected2 = $query2->affected_rows;
					$query2->close();
					if ($rowsAffected2 == 0) {
						echo "Failed";
					}
					elseif ($rowsAffected2 > 1) {
						echo "$rowsAffected2 rows affected!";
					}
					elseif ($rowsAffected2 == 1) {
						echo "Success";
					}
					else {
						echo "$rowsAffected2 rows affected!";
					}

				}
				else {
					$query->close();
					echo "Dress #" . $_POST["index"] . " does not exist";
				}
			}
			else {
				echo 'Error: $formInit = "checkOut", $clothingItem did not trigger.';
			}
		}

//close connection
      		$conn->close();
		?>
	    </div>
        </div>
    </body>
</html>

