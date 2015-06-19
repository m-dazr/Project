<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Users Page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!--script language="javascript" src="js/calendar.js"></script-->
     <script src="date/datetimepicker_css.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">System<span class="logo_colour">Administrator</span></a></h1>
          <h2>
		  <?php
		  
			session_start();
			$username = $_SESSION['username'];
			//if login successful
			if(isseT ($username))

				echo "<br>WELCOME, ".$_SESSION['username']."!<p><a href='logout.php'>LOGOUT</a>";
				

				else
				die("You must be logged in!"); 
				?>
				
			 
			
			</h2> 
        </div>
        <div id="contact_details">
		    
         
          
        </div>
      </div>
      <div id="menubar">
	  
         <!--Top Header Menu-->
		 <?php
		 include 'adminmenu.php';
		 
		 ?>
		
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
         
        
         
      </div>
      <div id="content">
        <!-- insert the page content here -->
		<h1>
		<?php
			$today = date("D F j, Y");
			PRINT "$today";
			?>
			
		<h2>Add New Users</h2>	
		
		<!-- ADD NEW USERS-->	
		<?php
		
		$con = mysql_connect("localhost","root","");	
		mysql_select_db("project",$con);
		
		if ($_POST['formsubmitted'] == 'TRUE') 
		$check_username = mysql_real_escape_string($_POST['username']); 
		$query = mysql_query("SELECT username FROM users WHERE username='".$check_username."'");

		if(mysql_num_rows($query)!= 0)
		{
		echo "<script language='javascript'>";
		echo "alert('Username already exists. Please choose a different username');";
		echo "window.location='usersadmin.php';";
		echo "</script>";
		//echo "Username already exists. Please choose a different username.<br><a href='usersadmin.php'>Try again</a>";
		}
		else
		{
			
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$username2 = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname','$lastname','$username2','$password')";
		
		$result=mysql_query($sql);
		
		if($result){
		echo "<p>New User Added";
		 
		$sql2="SELECT * FROM users WHERE username='$username2'";
		$result2=mysql_query($sql2);
		while($rows=mysql_fetch_array($result2))
		{
	?>
	<table width="100%" border="0" cellspacing="1" cellpadding="0">
	
	<tr align='center'>
	<td align="center"><strong><u>First Name</u></strong></td>
	<td><?php echo $rows['firstname']; ?></td>
	</tr>
	
	<tr align='center'>
	<td align="center"><strong><u>Last Name</u></strong></td>
	<td><?php echo $rows['lastname']; ?></td>
	</tr>

	<tr align='center'>
	<td align="center"><strong><u>Username</u></strong></td>
	<td><?php echo $rows['username']; ?></td>
	</tr>
	
	<tr align='center'>
	<td align="center"><strong><u>Password</u></strong></td>
	<td><?php echo $rows['password']; ?></td>
	</tr>
	
	</table>
	
	
	
	<?php
	}
	echo "<a href='admin.php'>Return to Home</a>";
}

	else {
	echo "ERROR";
	}
	
	}
	mysql_close($con) 
		
		
		
		
		
		
		
		
		
		
		
		?>
         
      </div>
    </div>
   <div id="footer">
      Copyright &copy; FRS |  |  |  
    </div>
  </div>
</body>
</html>
