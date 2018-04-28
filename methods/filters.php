<?php 

  /* Checks for data on POST request */

  // if (filter_has_var(INPUT_POST, 'data')) {
  //   echo "Data found";
  // } else {
  //   echo "No data";
  // }


  /* Basic Email Validation */

  // if (filter_has_var(INPUT_POST, 'data')) {
  //   if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
  //     echo "Email is valid";
  //   } else {
  //     echo "Email is not valid";
  //   }
  // }


  /* filter illegal characters (i.e. <<<me@gmail>>>.com --> me@gmail.com) */

  // if (filter_has_var(INPUT_POST, 'data')) {
  //   $email = $_POST['data'];

  //   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //   echo $email . '<br>';
  // }

  /* Sanitizing (using filter_var / FILTER_SANITIZE_SPECIAL_CHARS) to Avoid XSS */

  // $var = "<script>alert('Hi')</script>";
  // // echo $var;
  // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

  /* Use Filters for Multiple Inputs */

  $filters = [
    "data" => FILTER_VALIDATE_EMAIL,
    "address" => [
      "filter" => FILTER_VALIDATE_INT,
      "options" => [
        "min_range" => "1",
        "max_range" => "99999"
      ]
    ]
  ];

  print_r(filter_input_array(INPUT_POST, $filters));
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div>
  <label for="data">Email</label>
  <input type="text" name="data">
  </div>
  <div>
  <label for="Address">Address</label>
  <input type="text" name="address">
  </div>
  <button type="submit">Submit</button>
</form>