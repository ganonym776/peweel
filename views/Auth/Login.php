<?php

use Configs\Env;

$env = new Env();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
</head>

<body>
  <h3>Login</h3>
  <form action="<?php echo $env::$URLROOT ?>/auth/login" method="POST">
    <input type="text" name="username" id="username" placeholder="username *">
    <input type="password" name="password" id="password" placeholder="password *">
    <button type="submit">Submit</button>
  </form>
</body>

</html>