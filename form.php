<html>
  <head>
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
  <body>
    <?php
      echo "form.php under construction."; 
      echo "<p>" . $_GET["init"] . $_GET["name"] . $_GET["size"] . "</p>";
      $name = htmlspecialchars($_GET["name"], ENT_QUOTES);
      $size = htmlspecialchars($_GET["size"], ENT_QUOTES);
      if ($_GET["init"] == 1){
        echo $name . $size;
        }
    ?>
  </body>
</html>
