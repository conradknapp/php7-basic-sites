<?php 
  $user = [
    'name' => 'Conrad',
    'email' => 'conrad.knapp@outlook.com',
    'age' => 26
  ];

  $user = serialize($user);

  setcookie('user', $user, time() + (24 * 3600));

  print_r(unserialize($user));
?>