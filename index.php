<html>
  <p> DO NOT REFRESH PAGE OR PRESS BACK/FORWARDS BUTTONS </p>
  <head>
  <title>PHP Test</title>
    <?php
//site settings
      $domain="http://tempestj.ddns.net";
      echo "<p>
    <a href='" . $domain . "/?value=0' class='button'>Home</a> " .
    "<a href='" . $domain . "/?value=1' class='button'>List All Students</a> " . 
    "<a href='" . $domain . "/?value=2' class='button'>List Inventory</a>" . 
    "</p>";
    ?>
    <style>
      a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        color: initial;
        }
      body {
        background-color: ivory;
        text-align: center;
        }
      p {
        text-align: center;
        }
     form {
      display: inline-block;
      }
      </style>
  </head>
  <p>
    <?php
      $value=0;
      echo 'value = ' . htmlspecialchars($_GET["value"]). "\n";
    ?>
  </p>
    <form action="form.php" method="get">
      <select name="init">
       <option value="1">New Entry</option>
       <option value="2">Delete Entry</option>
       <option value="3">Search Entry</option>
      </select>
      <input type="text" name="name" id="name" value="name">
      <input type="text" name="size" id="size" value="size">
      <input type="submit">
    </form>
  <body>
    <?php
      $servername = "localhost";
      $username = "hma";
      $password = "fairfieldpass";
      $dbname = "hma";
// Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
//button 0
      if ($_GET["value"] == 0){
        echo "<p> HMA Inventory Management System Homepage </p>";
        }
//button 1
      if ($_GET["value"] == 1){
        $sql = "SELECT * FROM loaned";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<p>" . "Name: " . $row["name"]. " | size: " . $row["size"] . "</p>";
            }
          } 
        else {
          echo "0 results";
          }
        }
//button 2
      if ($_GET["value"] == 2){
        $sql = "SELECT * FROM loaned";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        echo "<p>Number of entries: " . $stmt->num_rows() . "<?p>";
        $stmt->close();
        }
//close connection
      $conn->close();
    ?>
  </body>
</html>
