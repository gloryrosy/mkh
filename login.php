<?php
$db = pg_connect("host=localhost port=5432 dbname=login1 user=postgres password=g123");
$result = pg_query($db, "SELECT * FROM db where name = '$_POST[name]' and password = '$_POST[password]'");
$login_check=pg_num_rows($result
);
if($login_check > 0)
  {
    echo '<script>alert("login successful")</script>';
  }
  else if($login_check == 0)
   {
    echo '<script>alert("login unsuccessful")</script>';
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE USING PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
<div id="frm">
   <h1>LOGIN</h1>
	<form name="frm" action="login1.php" method="POST" >
		<p>
	        <LABEL>USER NAME:</LABEL>
	        <input type="text" name="name">
        </p><p>
        	<label>PASSWORD:</label>
            <input type="password" name="password"/>
        </p>
        <p>
        	<input type="submit" name="btn" value="login"/>
        </p>
    </form>
</div>
</body>
</html>
