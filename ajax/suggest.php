<?php

$people[] = "Conrad";
$people[] = "Steve";
$people[] = "Brad"; 

$q = $_REQUEST['q'];  

$suggestion = "";

if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person) {
    if (strisstr($q, substr($person, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;
?>