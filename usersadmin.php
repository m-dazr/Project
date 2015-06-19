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
	 <script type="text/javascript">
	  <!--
	function confirmPost()
	{
	var agree=confirm("Are you sure you want to delete this user?");
	if (agree)
	return true ;
	else
	return false ;
	}
	// -->
	  
  
  </script>
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
		  <!--h2>Simple. Contemporary. Website Template.</h2-->
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
		 
	
		<!--FORM ADD NEW USER-->	
			
        <form method='POST' action='adduser.php'>
		 
		<table>
		
			
		<tr>
		<td>First Name
		<td>	<input type='text' name='fname' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Last Name
		<td>	<input type='text' name='lname' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
		 
		<tr>
		<td>Username
		<td>	<input type='text' name='username' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Password
		<td>	<input type='password' name='password' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
	 
		
		<td></td>
		<input type="hidden" name="formsubmitted" value="TRUE" />
		<td><input type='submit' name='submit' value='Add User'>
			<input type='reset' name='reset' value='Clear'>
		
		</td>
		
		</table>
				</form>
				
				
		 <form method='POST' action='deleteuser.php'>
		 
		<table>
		
		<!--DELETE USERS-->	
		<h2><u>Delete</u> User</h2>
		<tr>
		<td>Username
		<td>	<input type='text' name='uname' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
		
		 
		 
		
		<td></td>
	 
		<td><input type='submit' name='submit' value='Delete User' onClick="return confirmPost()">
			 
		
		</td>
		
		</table>
				</form>
     		
         
      </div>
    </div>
   <div id="footer">
      Copyright &copy; FRS |  |  |  
    </div>
  </div>
</body>
</html>
