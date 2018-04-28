<?php
  $msg = '';
  $msgClass = '';

  if (filter_has_var(INPUT_POST, 'submit')) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($email) && !empty($name) && !empty($message)) {
      // echo "Passed";
      if (filter_var($email, FILTER_VALIDATE_EMAIL === false)) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        $toEmail = 'conrad.knapp@outlook.com';
        $subject = 'Contact Request from ' . $name;
        $body = "<h2>Contact Request</h2>
          <h4>Name</h4><p>$name</p>
          <h4>Email</h4><p>$email</p>
          <h4>Message</h4><p>$message</p>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset-UTF-8" . "\r\n";
        $headers .= "From: $name <$email>\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          $msg = "Email has been sent";
          $msgClass = "alert-success";
        } else {
          $msg = "Email was not sent";
          $msg = "alert-danger";
        }

      }
    } else {
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
  <title>Contact Form</title>
</head>
<body>
  <main class="container">
    <?php if ($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="name">Name</label>      
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>      
        <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label for="message">Message</label>      
        <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message : ''; ?>">
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit">
    </form>
  </main>
</body>
</html>