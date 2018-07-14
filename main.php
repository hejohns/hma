<html>
  <p> DO NOT REFRESH PAGE OR PRESS BACK/FORWARDS BUTTONS </p>
  <head>
  <title>HMA Inventory System</title>
    <?php
      include "config.php";
      $logSuccess = fopen("logSuccess.txt", 'w');
      fclose($logSucess);
      $txt = time();
      fwrite($logSuccess, $txt);
      fclose($logSuccess);
      echo '
      <form action="index.php" method="POST">
        <input type="hidden" name="usern" value="' . "$indexUsername" . '"/>
        <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
        <input type="hidden" name="indexInit" value="1" />
        <input type="hidden" name="value" value="0"/>
        <button name ="submit" value="1" type="submit">Home</button>
      </form>
      <form action="index.php" method="POST">
        <input type="hidden" name="usern" value="' . "$indexUsername" . '"/>
        <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
        <input type="hidden" name="indexInit" value="1" />
        <input type="hidden" name="value" value="1"/>
        <button name ="submit" value="1" type="submit">Number of entries</button>
      </form>
      <form action="index.php" method="POST">
        <input type="hidden" name="usern" value="' . "$indexUsername" . '"/>
        <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
        <input type="hidden" name="indexInit" value="1" />
        <input type="hidden" name="value" value="2"/>
        <button name ="submit" value="1" type="submit">List all entries</button>
      </form>
      <form action="index.php" method="POST">
        <input type="hidden" name="usern" value="' . "$indexUsername" . '"/>
        <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
        <input type="hidden" name="indexInit" value="1" />
        <input type="hidden" name="value" value="3"/>
        <button name ="submit" value="1" type="submit">List entries alphabetically</button>
      </form>

      ';
    ?>
  </head>
  <p>
    <?php
      $value=0;
      echo 'value = ' . htmlspecialchars($_POST["value"]). "\n";
      echo '
    </p>
    <form action="index.php" method="POST">
      <select name="formInit">
       <option value="1">New Entry</option>
       <option value="2">Delete Entry</option>
       <option value="3">Search Entry</option>
      </select>
      <input type="hidden" name="indexInit" value="2" />
      <input type="hidden" name="usern" value="' .  "$indexUsername" . '"/>
      <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
      Name <input type="text" name="name" id="name" value="">
      Size <input type="text" name="size" id="size" value="">
      <input type="submit">
    </form>';
    ?>
  <body>
    <?php
// Create connection
      $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
//button 0
      if ($_POST["value"] == 0){
        echo "<p> HMA Inventory Management System Homepage </p>";
        }
//button 1
      if ($_POST["value"] == 1){
        $sql = "SELECT * FROM $loaned";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->store_result();
        echo "<p>Number of entries: " . $stmt->num_rows() . "<?p>";
        $stmt->close();
      }
//button 2
      if ($_POST["value"] == 2){
              $sql = "SELECT * FROM $loaned";
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
//button 3
      if ($_POST["value"] == 3) {
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
  </body>
</html>
