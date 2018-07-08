<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php
      echo "form.php under construction."; 
      echo "<p>" . $_GET["init"] . $_GET["name"] . $_GET["size"] . "</p>";
      $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
      $size = htmlspecialchars($_POST["size"], ENT_QUOTES);
      if ($_POST["init"] == 1){
        echo $name . $size;
        }
    ?>
  </body>
</html>
