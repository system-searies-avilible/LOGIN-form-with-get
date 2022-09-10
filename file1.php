<!doctype html>
<html>
<head> 

<title>login form</title>

</head>

<body>



<form method="get" action="mypage.php">
<table border="2">
<tr>
<th>Email :</th>
<td><input type="email" name="txtemail" ></td>
</tr>

<tr>
<th>Password :</th>
<td><input type="password" name="txtpass" ></td>
</tr>





<tr>

<td><input type="submit" name="btn_sub" value="login" ></td>
</tr>
</table>

</form>


</body>
</html>

<?php
$email=$_GET['txtemail'];
$pass=$_GET['txtpass'];

if($email=="admin@gmail.com" && $pass=="1234"){
echo"<script> window.location.assign('mypage.php');</script>";		
}
elseif($email!="admin@gmail.com" && $pass=="1234"){
echo"Invalid User name";	
}
elseif($email=="admin@gmail.com" && $pass!="1234"){
	echo"Invalid password";
	
}
else{
	echo"Invalid username and password";
}
?>