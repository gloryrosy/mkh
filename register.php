<!DOCTYPE html>
<head>
<title>LOGIN AND REGISTER PAGE</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;
form{
	border:solid gray 1px;
	width:55%;
	margin:120px auto;
	background:white;
	padding:50px;
	height: 50%;
}
#btn
{
	color:#fff;
	background:#337ab7;
	padding:7px;
	margin-left:70%;
}
</style>
</head>
<body background=bg.jpg">
<center><h2>REGISTRATION FORM</h2></center>
<ul>
<form name="frm" action="register1.php" method="POST" >
name:<input type="text" name="name" /><br>

email id:<input type="email" name="email" /><br>

dob:<input type="date" name="dob" /><br>
password:<input type="password" name="password" />
<input type="submit" />
</form>
</ul>
</body>
</html>
