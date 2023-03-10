<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Page1</title>

<link rel="stylesheet" href="./style/form.css">
</head>

<body>

  <h1>Registration Form</h1>
  <form method="POST" action="page2.php">
  <label>Name:</label>
  <input type="text" name="name" required><br><br>
  <label>Phone Number:</label>
  <input type="text" name="phone" required><br><br>
  <label>Email:</label>
  <input type="email" name="email" required><br><br>
  <input type="submit" value="Next">
  </form>

</body>

</html>