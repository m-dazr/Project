<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start();?>

<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/shadedborder.js"></script>
<script language="javascript" type="text/javascript">
  var holderBorder = RUZEE.ShadedBorder.create({ corner:20, border:2 });
</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<body background="images/bg.jpg">

</head>
<body>
<div id="content">
  <div id="innerholder">
    <h3><span></span><hr>
    </h3>
    
    <font size="3" face="Bookman Old Style, Book Antiqua, Garamond">
     
	 <?php
/*	 
	 
session_start();  //start a session

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
$connect = mysql_connect("localhost","root","") or die ("Connection Error");
mysql_select_db("Project") or die ("No db found");

$query = mysql_query("SELECT * FROM users");

$numrows = mysql_num_rows($query);

//echo $numrows;  show number of users exist in db 

if ($numrows!=0)    
{	
	//code to check if user place input 
	while ($row = mysql_fetch_assoc($query))
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	//check to see username password match in DB
	if ($username==$dbusername&&$password==$dbpassword)
	{
		echo"Login Successful!<br><a href='index.php'>Click here</a> to enter.";
		$_SESSION['username']=$dbusername;
	}
	else
		echo "Wrong password!";

		
		
		
}
else
	die ("No such user exist!");
	
}	
else 
	die("Please Enter A Username and Password");
*/
?>


<?php

$connect = mysql_connect("localhost","root","") or die ("Connection Error");
mysql_select_db("Project") or die ("No db found");


$username = $_POST['username'];
$password = $_POST['password'];
 
if ($username&&$password)
{
 
//log in
$login = mysql_query("SELECT * FROM users WHERE username='$username'");
if (mysql_num_rows($login)==0)
	echo "<h2>Username does not exist.</br><a href='login.php'>Back to Login</a></h2></br></br></br>";
	
else
{
	$login_row = mysql_fetch_assoc($login) ;
	
	//get password from db
	$password_db = $login_row['password'];
	
	//encrypt entered form password
	//$password = md5($password);
	
	//check if passwords match
	if ($password!=$password_db)
		echo "<h2><font color='red'>Incorrect Password<br>Please try again.</font><br><a href='login.php'>Back to Login</a></h2></br></br></br></br></br></br>";
		
	else
	{
	//check if user account is activated
	//$active = $login_row['Status'];
	//$email = $login_row['Email'];
	
	if ($username=='admin'){
		 
		$_SESSION['username']=$username;
		
		//refresh to member page
		header("Location:admin.php"); 
	}
	else	
	{
		$_SESSION['username']=$username;
		
		//refresh to member page
		header("Location:index.php"); 
	}
}


}
}


?>










  </div>
</div>
<script language="javascript" type="text/javascript">  
    holderBorder.render('content');
</script>
</body>
</html>