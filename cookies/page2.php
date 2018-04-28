<?php 
  if (count($_COOKIE) > 0) {
    echo 'There are ' . count($_COOKIE) . ' cookies <br>';
  }

  if (isset($_COOKIE['username'])) {
    echo "User " . $_COOKIE['username'] . "is set";

    // if we check our dev tools in Application, we should see our cookie
  } else {
    echo "User is not set";
  }
?>