<!DOCTYPE HTML>
<html>

<head>
  <title>Welcome!</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
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
		  <!--h2>Simple. Contemporary. Website Template.</h2-->
        </div>
        <div id="contact_details">
		    
          <!--p>tel: 0100 123 456</p-->
          
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
		<?php
			$today = date("D F j, Y");
			PRINT "$today";

			?>
			
			<p>Welcome to the facility reservation system. </h1>
			<p>To add a new booking, simply click on the 'new booking' tab above and fill in the details.
			
			<?php
// Turn off all error reporting
error_reporting(0);

$today = date("D F j, Y");
$month = date("M");
echo "<h1>Events for the month <u>$month</u></br></h1>"; 


// Connect to server and select database. 


	$con = mysql_connect("localhost","root","");	
	mysql_select_db("project",$con);
	if ($con)
	{
		//die('Could not connect:'.mysql_error());
	//}
	//echo "success";
	
//----------------------------------------------------------------------------------//

	
	
	//if($con)
	//{
	
	$sql="Select * FROM event WHERE stdate LIKE '%$month%' ORDER by stdate";
	$result = mysql_query($sql) or die(mysql_error());
	
	 
	
	echo "<table border='1' BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>
		<tr>
					<th width='100'>Booking ID</th>
					<th width='100'>Event Name</th>
					<th width='100'>Description</th>
					<th width='100'>Staff</th>
					<th width='100'>Date</th>
					<th width='100'>Time</th>
					<th width='100'>Location</th> 
					</tr>";
					
		while($get_row = mysql_fetch_assoc($result)){	
		
		?>
		 
		
			
		<tr align='center'>
		
		 <td width='100' height='50'>
			<?php echo	$get_row['eventID'];	?>
			</td>
		
		<td width='100' height='50'>
			<?php echo	$get_row['ename'];	?>
			</td>
							
			<td width='250'>
			<?php echo $get_row['edesc']; ?> 
			</td>
			
		<td width='150'>
			<?php echo $get_row['staffname']; ?> 
			</td>
			
				
		<td width='150'>
			<?php echo $get_row['stdate']; ?> 
			</td>	
			
		<td width='150'>
			<?php echo $get_row['stime']; ?>hrs -- <?php echo $get_row['entime']; ?>hrs
			</td>		
			

		
		<td width='150'>
			<?php echo $get_row['elocation']; ?> 
			</td>	
			
			
			</tr>
		 <?php
		 }
		 ?>
				</table>     
			<?php	
				
	
	}
	?>
				
				
				
			
			
			
		</br></br></br>	
			
			
			
       
         
      </div>
    </div>
	 
    <div id="footer">
      Copyright &copy; FRS |  |  |  
    </div>
  </div>
</body>
</html>
