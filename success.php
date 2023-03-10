<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Success</title>

      <link rel="stylesheet" href="./style/form.css">
</head>

<body>
      <h1>Success!</h1>
      <?php
      // Fetching the data from page 2

      $name = $_POST['name'];

      // $location = $_POST['location'];
      // $age = $_POST['age'];
      // $university = $_POST['university'];

      // Displaying a thank you message with the person's name

      echo '<p class="success">Thank you for filling the form, ' . $name . '!</p>';

      // To Display the other data submitted in the form
      // echo '<p class="success">Location: ' . $location . '</p>';
      // echo '<p class="success">Age: ' . $age . '</p>';
      // echo '<p class="success">University: ' . $university . '</p>';

      ?>
</body>

</html>