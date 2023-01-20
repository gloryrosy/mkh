<?php
$db = pg_connect("host=localhost port=5432 dbname=login1 user=postgres password=g123");
$query = "INSERT INTO db VALUES ('$_POST[name]','$_POST[email]','$_POST[dob]','$_POST[password]')";
$result = pg_query($query); 
$login_check=pg_num_rows($result);
if($login_check > 0)
  {
    echo '<script>alert("registered successfully")</script>';
  }
?>