<html>
  <p> DO NOT REFRESH PAGE OR PRESS BACK/FORWARDS BUTTONS </p>
  <head>
  <title>PHP Test</title>
    <a href="http://tempestj.ddns.net/?value=0" class="button">Button 0</a>
    <a href="http://tempestj.ddns.net/?value=1" class="button">Button 1</a>
    <a href="http://tempestj.ddns.net/?value=2" class="button">Button 2</a>
    <style>
    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        color: initial;
        }
      </style>
  </head>
  <p>
    <?php
      $value=0;
      $name="dude";
      $size="s";
      echo 'value = ' . htmlspecialchars($_GET["value"]). "\n";
    ?>
  </p>
  <p>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" />
    <input type="text" name="size" value="<?php echo htmlspecialchars($size); ?>" />
  </p>
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
        echo "HMA Inventory Management System Homepage";
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
//button 3
      if ($_Get["value"] == 2){
        $sql = "INSERT INTO `loaned` (`name`, `size`) VALUES ($name,$size)";
        echo $sql;
        }
//close connection
      $conn->close();
    ?>
  </body>
</html>
