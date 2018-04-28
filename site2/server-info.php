<?php 
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
  ];

  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT']
  ];

?>