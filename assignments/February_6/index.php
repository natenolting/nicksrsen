
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>Forms</title>
<style>
  .error{
    font-weight: 600px;
    color: red;
    font-family: italic;
  }
</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
  <?php
      if (isset($_SESSION['error_message'])) {
        echo '<p class="error">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
      }
    ?>
<form method="post" action="endpoint.php">
  <fieldset>
  <div>
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : null); ?>"
       required="required"/>
  </div>
  <div>
    <labeL for="email">Email:</label>
      <input type="email" id="email" name="emial" value="<?php echo (isset($_SESSION['email']) ? $_SESSION['email'] : null); ?>"
      required="required"/>
  </div>
  <div class="one">
    <label for="phone number">Phone Number:</label>
      <input type="phone number" id="phone number" name="phone number" value="<?php echo (isset($_SESSION['phone number']) ? $_SESSION['phone number'] : null); ?>"
      "required="required"/>
  </div>
  <div class="two">
    <label for="comments">Comments:</label>
      <textarea id="comment" name="comment" rows="5" columns="20" <?php echo (isset($_SESSION['comments']) ? $_SESSION['comments'] : null); ?>
      required="required">Let me know what you think</textarea>
  </div>
  <div>
      <input type="submit" value="Submit"/>
</fieldset>
    </form>
</body>
</html>
