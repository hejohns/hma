<html>
  <p> DO NOT REFRESH PAGE OR PRESS BACK/FORWARDS BUTTONS </p>
  <head>
  <title>HMA Inventory System</title>
    <?php
      include "config.php";
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
        <button name ="submit" value="1" type="submit">List all entries</button>
      </form>
      <form action="index.php" method="POST">
        <input type="hidden" name="usern" value="' . "$indexUsername" . '"/>
        <input type="hidden" name="passw" value="' . "$indexPassword" . '"/>
        <input type="hidden" name="indexInit" value="1" />
        <input type="hidden" name="value" value="2"/>
        <button name ="submit" value="1" type="submit">Number of entries</button>
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
      Name<input type="text" name="name" id="name" value="">
      Size<input type="text" name="size" id="size" value="">
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
        $sql = "SHOW COLUMNS FROM loaned";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
        echo '<table>';
        while ($row = $result->fetch_assoc()){
                echo '<td><table>';
                $column = $row["Field"];
                $sql2 = "SELECT $column FROM loaned";
                $result2 = $conn->query($sql2);
                echo '<tr><td>' . $column . '</td></tr>';
                while ($row2 = $result2->fetch_assoc()){
                        echo '<tr><td>' . $row2[$column] . '</td></tr>';
                }
                echo '</table></td>';
        }
        echo '</table>';
        }
        else {
                echo "0 results";
        }
      }
//button 2
      if ($_POST["value"] == 2){
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
