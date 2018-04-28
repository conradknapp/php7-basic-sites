<?php
  session_start();

  // unset($_SESSION['name']);

  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 4</title>
</head>
<body>
  <h2>Hello <?php echo $name; ?></h2>
  <a href="index.php">Go back home</a>
</body>
</html>