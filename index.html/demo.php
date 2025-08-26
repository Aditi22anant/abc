<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login Form</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <form method='POST'>
    <label for="username">Username:</label><br/>
    <input type="text" id="username" name="username" placeholder="Enter your username" /><br /><br />
    <input type="submit" value="Submit" />
  </form>
  <?php
  if ($_SERVER["REQUEST METHOD"] == "POST" && isset($_POST['username'])) {
    $username = $_POST['username'];
    echo "<h3> Hello $username </h3>";
}
?>
</body>
</html>