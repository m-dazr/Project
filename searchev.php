<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
	<title>Search Engine - Search</title>
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

			//if login successful
			if(isseT ($_SESSION['username']))

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
		<h1>
		
	
	<h2>Search Event</h2>
	<form action='./searchev.php' method='get'>
		<input type='text' name='k' size='50' value='<?php echo $_GET['k']; ?>' /> 
		<input type='submit' value='Search'>
	</form>
	<hr />
	<?php
		$k = $_GET['k'];
		$terms = explode(" ", $k);
		$query = "SELECT * FROM event WHERE ";
		
		foreach ($terms as $each){
			$i=0;
			$i++;
			if ($i == 1)
				$query .= "edesc LIKE '%$each%' ";
			else
				$query .= "OR edesc LIKE '%$each%' ";
			 
		}
		
		// connect
		mysql_connect("localhost", "root", "");
		mysql_select_db("project");
		
		$query = mysql_query($query);
		$numrows = mysql_num_rows($query);
		if ($numrows > 0){
			
			while ($row = mysql_fetch_assoc($query)){
			
			echo "<table border='1' BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>
					<tr>
					<th width='100'>Booking ID</th>
					<th width='100'>Event Name</th>
					<th width='100'>Description</th>
					<th width='100'>Staff</th>
					<th width='100'>Start Date</th>
					<th width='100'>Start Time</th>
					<th width='100'>End Time</th>
					 
					<th width='100'>Location</th> 
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
			
			  
 			</tr>
				
			<?php	
				
			}
			
		}
		else
			echo "No results found for \"<b>$k</b>\"";
		
		// disconnect
		mysql_close();
	?>
	 
	
	</div>
	 
    </div>
	</div>
	
	
	
 
  
	
	
</body>
</html>