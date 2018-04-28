<?php
  require('config/config.php');
  require('config/db.php');

  // Get id 
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // Create Query
  $query = 'SELECT * FROM posts WHERE id' . $id;

  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Posts
  $post = mysqli_fetch_assoc($result);

  /* Dump to make sure we are getting the posts */
  // var_dump($posts);

  // Free Result
  mysqli_free_result($result);

  // Close Connection
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
  <title>PHP Blog</title>
</head>
<body>
 <div class="container">
 <a href="<?php echo ROOT_URL; ?>">Back</a>
  <div>
    <h1><?php echo $post['title'] ?></h1>
    <p><?php echo $post['body'] ?></p>
  </div>
 </div>
</body>
</html>