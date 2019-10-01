<?php
session_start();
$connectivity=mysqli_connect("localhost","root","","kitchenmaster");
if(isset($_POST["commentsubmit"]))
{
$uid=$_POST['uid'];
$message=$_POST['message'];

$query2 = "select * from comment";
$query3=mysqli_query($connectivity,$query2);
if(mysqli_fetch_array($query3))
{
	$query="insert into comment values ('$uid','$message')";
	mysqli_query($connectivity,$query);
}
else{
	echo "<script>alert('try again');</script>";
}
}
 
function getcomments(){
$conn = mysqli_connect('localhost','root','','kitchenmaster');
$sql = "select * from comment";
$result = mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
echo "<div class='commentbox'>";
echo $row['uid']."<br>";
echo $row['message'];
echo "</div>";
}
}
    
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<style>
.image{
	border-radius:20px;
	margin-top:20px;
	margin-left:20px;
	float:left;
	margin-right:20px;
	}
.header{
	background-color:#FF9900;
	height:150px;
	width:100%;
	}
.header h1{
	font-family:forte;
	top:15px;
	position:absolute;
	left:350px;
	font-weight:bold;
	font-size:50px;
	}
.logo{
	height:150px;
	position:absolute;
	left:40px;
	}
.navigation{
	background-color:#FF9900;
	margin-top:5px;
	height:40px;
	position:relative;
	}
.notactive{
	position:absolute;
	height:40px;
	float:right;
	width:120px;
	background-color:red;
	font-weight:bold;
	font-size:20px;
	font-family:forte;
	}
.notactive:hover{
	background-color:lightgreen;
	}
.map{
    color:white;
    float:left;
	}
.location{
	height:300px;
	width:90%;
	background-color:grey;
	position:relative;
	}
.line{
	height:300px;
	width:1px;
    background-color:white;
	float:left;
	position:absolute;
	left:650px;
	top:0px;
	}
.contact{
	height:200px;
	width:300px;
    left:700px;
	top:30px;
	float:left;
    position:absolute;
	color:white;
	}
textarea{
	background-color:#fff;
	resize:none;
	width:400px;
	height:80px;
	border-radius:20px;
	}
.commentsubmit{
	width:100px;
	height:30px;
	background-color:red;
	border:none;
	color:#fff;
	border-radius:10px;
	}	
.commentbox{
    margin-top:10px;
	padding-top:15px;
	padding-left:10px;
	background-color:lightgrey;
	border-radius:10px;
	padding-bottom:15px;
	}	
</style>

<body>

<div class="header">
<img src="logo.png" class="logo" />
<h1>Be The Master Of Your Kitchen</h1>
</div>

<div class="navigation">
<a href="home.php" style="text-decoration:none; color:black;"><button class="notactive">Home</button></a>
<a href="category.php" style="text-decoration:none; color:black;"><button class="notactive" style="left:120px;">Category</button></a>
</div>

<div style="margin:30px;">
<h1>Motive:</h1>
<p style="font-size:20px;">
The only purpose of this site is to provide ease of access to all the users who have a great affection towards cooking.
And not to harm anybody's feeling.
</p>
<h1>Values Reflected:</h1>
<p>Those who are not satisfied or are unhappy with any stuff present in our site can contact us at the details given below.</p>
<h1>Contact Us At:</h1>
<div class="location">
<div class="map">
<div id="locate"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.362979625064!2d75.0125671147044!3d29.53492188207057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114c558670057b%3A0xb22f16f32151054f!2sGovt+Polytechnic+Sirsa!5e0!3m2!1sen!2sin!4v1530105300603" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div>
<div class="map" style="padding-left:30px;padding-top:30px;float:left;">
Govt. Polytechnic Sirsa,<br />
Rania Road,<br />
Near New Civil Hospital,<br />
F-Block, Sirsa<br />
Haryana 125055
</div>
<div class="line"></div>
<div class="contact">
Contact Nos.:
<br />&nbsp;&nbsp;&nbsp;&nbsp; +91-1666-240654
<br />&nbsp;&nbsp;&nbsp;&nbsp; +91-1666-240097
<br />
Email Address:
<br />&nbsp;&nbsp;&nbsp;&nbsp;gpsirsa@hry.nic.in
</div>
</div>
</div>

<form method='post' action='#'>
      <input type='email' name='uid' style='padding:10px; border-radius:10px;' placeholder='Email'><br />
	  <textarea name='message' style='padding:10px;' placeholder='Please Give Us Reviews'></textarea><br><br>
	  <input name='commentsubmit' class='commentsubmit' type='submit'>
</form>
<?php
getcomments();
?>
</body>
</html>
