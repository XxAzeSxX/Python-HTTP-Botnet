<!DOCTYPE html>
<html>
<body>
  <?php
  $command = $_POST["command"];
  $control = fopen("commands.txt", "w") or die("Unable to open file!");
  fwrite($control, $command);
  fclose($control);
  echo 'Success';
  echo "<br>";
  echo "<a href='index.html'>Back</a>"
  ?>
</body>
