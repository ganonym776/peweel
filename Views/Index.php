<?php
  $a = new Models\Model;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
</head>

<body>
  <?php
    var_dump ($a::getAll('web'));
  ?>
</body>

</html>