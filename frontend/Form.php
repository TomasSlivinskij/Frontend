<?php include("Conn.php") ?>
<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Simple Form</h2>
  </div>
<div id="form">
<form method="post" action="Form.php">
  <label for="FirstName">First name:</label><br>
  <input type="text" name="FirstName" placeholder="Ener first name" value="<?php echo $FirstName; ?>"><br>

  <label for="LastName">Last name:</label><br>
  <input type="text" name="LastName" placeholder="Ener last name" value="<?php echo $LastName; ?>"><br>

  <label for="email">Email:</label><br>
  <input type="text" name="email" placeholder="Ener email" value="<?php echo $email; ?>"><br>

  <label for="country">Country:</label><br>
  <input type="text" name="country" placeholder="Ener country" value="<?php echo $country; ?>"><br>

  <label for="adress">Adress:</label><br>
  <input type="adress" name="adress" placeholder="Ener adress" value="<?php echo $adress; ?>"><br>
  
  <button class="button1" type="submit" name="submit">Submit</button>
</form>
</div>


</body>
</html>
