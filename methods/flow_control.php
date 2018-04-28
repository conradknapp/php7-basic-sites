<h2>If / else</h2>

<?php 

  $auth = false;

  if ($auth) {
    echo 'User is auth';
  } else {
    echo 'User is not auth';
  }
?>

<h2>Ternary</h2>

<?php

  $auth = true;

  echo $isAuth = $auth ? "User is auth" : "User is not auth";
?>

<!-- <div>
  <?php if ($auth) { ?>
    <h1>Welcome User</h1>
  <?php } else { ?>
    <h1>Welcome Visitor</h1>
  <?php } ?>
</div> -->

<div>
  <?php if ($auth): ?>
    <h2>Welcome User</h2>
  <?php else: ?>
    <h2>Welcome Visitor</h2>
  <?php endif; ?>
</div>