<?php
  session_start();
  foreach ($_POST as $key => $value) {
      $_SESSION[$key] = $value;
  }
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error_message'] = "Please provide a valid email address";
      header("location: index.php");
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted</title>
  </head>
  <body>
    <div class="container">
      <p>Hey <?php echo $_POST['name'] ?>,
        thank you for letting us know what you think. Please review what you said:</p>
      <table>
      <thead>
      <tr>
      <th>Input</th>
      <th>Value</th>
      </tr>
      </thead>
  <tbody>
      <?php
      foreach ($_POST as $key => $val) {
      echo "<tr>
      <td>{$key}</td>
      <td>{$val}</td>
      </tr>";
              }
          ?>
</tbody>
      </table>
    </div>
  </body>
</html>
<?php
  foreach (array_keys($_POST) as $key) {
    if(isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    }
  }
