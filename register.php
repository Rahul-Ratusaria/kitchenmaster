<?php
session_start();
	session_destroy();
$connectivity=mysqli_connect("localhost","root","","kitchenmaster");
if(isset($_POST['submit']))
{
	$username=$_POST["a1"];
	$email=$_POST["a2"];
	$password=$_POST["a3"];
	$confirmpassword=$_POST["a4"];
	
	$query2 = "select * from kitchen where email='$email'";
	$query3=mysqli_query($connectivity,$query2);
	if(mysqli_fetch_array($query3))
       echo ("<script> alert('You are already registered. Please choose another email');</script>");
	elseif($password==$confirmpassword)
	{
	   $query="insert into kitchen(username,email,password,confirmpassword) values ('$username','$email','$password','$confirmpassword')";
	   echo ("<script> alert('You are successfully registered');</script>");
	   mysqli_query($connectivity,$query);
	}
	else
	   echo ("<script> alert('Password not match');</script>");
}	   
?>	     

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style>
.container{
	height:450px;
	width:300px;
	border-radius:30px;
	background:linear-gradient(#f00000,purple);
	transform:translate(520px,70px);	
	} 	
.container img{
	transform:translate(110px,-40px);
	border-radius:40px;
	}		
.fill{
	border:0; 
	border-bottom:1px solid black;  
	border-radius:10px;
	padding-left:10px;	
	width:90%;
	padding-top:10px;
	}
.submit{
	height:30px;
	width:70%;
	font-weight:bold;
	border-radius:10px;
	}		
</style>	

</head>

<body style="color:yellow; background:url('background4.jpg');">

<div class="container">
<img src="avatar.png" height="80px" width="80px" />
<center><b><h1 style="font-size:25px; margin-top:-20px;">Register Here</h1></b></center>
<form method="post" action="#" style="padding-left:20px; padding-top:20px;">
<b>Username</b>
<br />
<input type="text" name="a1" placeholder="Enter Username" class="fill" required />
<br /><br />
<b>Email</b>
<br>
<input type="email" name="a2" placeholder="Enter your email" class="fill" required>
<br><br>
<b>Password</b>
<br />
<input type="password" name="a3" placeholder="Enter Password (mininum 6 characters)" class="fill" pattern=".{6,}" required />
<br /><br />
<b>Confirm Password</b>
<br />
<input type="password" name="a4" placeholder="Confirm Your Password" class="fill" required />
<br /><br />
<center><input type="submit" name="submit" class="submit" value="register" /></center>
</form>
</div>

</body>
</html>
