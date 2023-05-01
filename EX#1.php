<!DOCTYPE html>
<html>
  <head>
    <title>PHP Hello World</title>
  </head>
  <body>
    <h1 id="php">hi</h1>
    <?php
      $text = "Hello World!";
      echo "<script>document.getElementById('php').innerHTML = '$text';</script>";
    ?>
  </body>
</html>
