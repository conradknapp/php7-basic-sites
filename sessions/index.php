<?php
  if (isset($_POST['submit'])) {
    session_start(); 

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('location: subscribe.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions</title>
</head>
<body>
  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div>
      <input type="text" name="name" placeholder="Enter name">
    </div>
    <div>
      <input type="text" name="email" placeholder="Enter email">
    </div>
    <div>
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</body>
</html>