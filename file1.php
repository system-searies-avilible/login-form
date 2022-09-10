<!doctype html>
<html>
<head> 

<title>login form</title>

</head>

<body>



<form method="post">
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname" ></td>
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
$name=$_POST['txtname'];
$pass=$_POST['txtpass'];

if($name=="admin" && $pass=="1234"){
echo"Login sucessfully";		
}
elseif($name!="admin" && $pass=="1234"){
echo"Invalid User name";	
}
elseif($name=="admin" && $pass!="1234"){
	echo"Invalid password";
	
}
else{
	echo"Invalid username and password";
}
?>