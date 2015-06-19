<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
error_reporting(0);
?>

<head>
	 <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
	<title>Edit Event</title>
</head>
<body>
	 <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Facility<span class="logo_colour">Reservation System</span></a></h1>
          <h2>
		  <?php
		  
			session_start();

			$username = $_SESSION['username'];
			
			//if login successful
			if(isseT ($username))

				echo "<br>WELCOME, ".$_SESSION['username']."!<p><a href='logout.php'>LOGOUT</a>";
				

				else
				die("You must be <a href='login.php'>logged in!</a>"); 
				?>
				
			 
			
			</h2>
		 
        </div>
		
		
      </div>
      <div id="menubar">
	  
          <!--Top Header Menu-->
		 <?php
		 include 'menu.php';
		 
		 ?>
		
      </div>
    </div>
	
	<div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here --> 
      </div>
      <div id="content">
        <!-- insert the page content here -->
		 
	
	 
	<?php
		// connect
		mysql_connect("localhost", "root", "");
		mysql_select_db("project");
		
				
		$query = "SELECT * FROM event WHERE staffname = '$username' ";
		$query = mysql_query($query);
		
		
		$numrows = mysql_num_rows($query);
		
		 
			if ($numrows>0){
			
			while ($row = mysql_fetch_assoc($query)){
			
			 
			echo "<table border='1' >
					<tr>
					<th width='100'>Booking ID</th>
					<th width='100'>Event Name</th>
					<th width='100'>Description</th>
					<th width='100'>Staff</th>
					<th width='100'>Date</th>
					<th width='100'>Start Time</th>
					<th width='100'>End Time</th>
					<th width='100'>Location</th> 
					<th></th>
					</tr>";
				 
				?>
				
				<tr align='center'>
			<td width='100' height='50'>
			<?php echo	$row['eventID'];	?>
			</td>
			
			<td width='100' height='50'>
			<?php echo	$row['ename'];	?>
			</td>
							
			<td width='250'>
			<?php echo $row['edesc']; ?> 
			</td>
			
		<td width='150'>
			<?php echo $row['staffname']; ?> 
			</td>
			
		<td width='150'>
			<?php echo $row['stdate']; ?> 
			 
			</td>	
			
			<td width='150'>
			<?php echo $row['stime']; ?> 
			 
			</td>	
			
			<td width='150'>
			<?php echo $row['entime']; ?> 
			 
			</td>	
			
		<td width='150'>
			<?php echo $row['elocation']; ?> 
			</td>	
			
			 <!--UPDATE-->
			<td align="center"><a href="update.php?eventID=<?php echo $row['eventID']; ?>">update</a></td>
			</tr>
				
			<?php	
				
			}
			
		}
		else
		{
			echo "<h2>You have no events to edit.</h2></br></br></br></br>";
		
		}
		// disconnect
		mysql_close();
	?>
	
	</div>
    </div>
	</div>
	
	
	
   
  
	
	
</body>
</html>