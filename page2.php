<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Page2</title>

      <link rel="stylesheet" href="./style/form.css">
</head>

<body>

      <h1>Registration Form</h1>
      <form method="POST" action="success.php">
            <label>Location:</label>
            <input type="text" name="location" required><br><br>
            <label>Age:</label>
            <input type="number" name="age" required><br><br>
            <label>University:</label>
            <input type="text" name="university" required><br><br>
            <?php
            // Passing the data from page 1 to page 2
            echo '<input type="hidden" name="name" value="' . $_POST['name'] . '">';
            echo '<input type="hidden" name="phone" value="' . $_POST['phone'] . '">';
            echo '<input type="hidden" name="email" value="' . $_POST['email'] . '">';
            ?>
            <input type="submit" value="Submit">
      </form>
</body>

</html>