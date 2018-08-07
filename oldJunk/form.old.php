<html>
  <body>
    <?php
      echo "form.php under construction."; 
      echo "<p>" . $_POST["formInit"] . $_POST["name"] . $_POST["size"] . "</p>";
      $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
      $size = htmlspecialchars($_POST["size"], ENT_QUOTES);
      if ($_POST["formInit"] == 1){
        echo $name . $size;
        }
    ?>
  </body>
</html>
