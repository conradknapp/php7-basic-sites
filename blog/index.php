<?php
  require('config/config.php');
  require('config/db.php');

  // Create Query
  $query = 'SELECT * FROM posts';

  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Posts
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
 <h2>Posts</h2>
 <?php foreach($posts as $post): ?>
  <div class="well">
    <h3><?php echo $post['title'] ?></h3>
    <h4><?php echo $post['author'] ?></h4>
    <!-- <small>Created on <?php echo $post['created_at'] ?></small> -->
    <p><?php echo $post['body'] ?></p>
    <a class="btn btn-default" href="post.php?id<?php echo $post['id']; ?>">Read More</a>
  </div>
 <?php endforeach; ?> 
 </div>
</body>
</html>