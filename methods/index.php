<?php
  if (isset($_GET['name'])) {
    $result = [
      'name' => $_GET['name'],
      'email' => $_GET['email']
    ];
    echo htmlentities($result);
  }

  if (isset($_POST['name'])) {
    $result = $_GET['name'] . " " . $_GET['email'];
    echo htmlentities($result);
  } 

  // if (isset($_REQUEST['name'])) {
  //   $result = $_GET['name'] . " " . $_GET['email'];
  //   echo htmlentities($result);
  // } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form method="GET">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <br>
  <br>
  <h3><?php echo "{$result['name']}'s Profile"; ?></h3>
<br>
<?php echo $_SERVER['QUERY_STRING'];
?>
</body>
</html>