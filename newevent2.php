<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
error_reporting(0);
?>
<head>
  <title>Add Event</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script language="javascript" src="js/calendar.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Facility<span class="logo_colour">Reservation System</span></a></h1>
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
			
							
					<?php 
					if (isset($_POST['submit']) && ($_POST['submit'] == "submit")){ 
					
					$eventname = (isset($_POST['eventname']) ? strip_tags($_POST['eventname']) : ''); 
					$edesc = (isset($_POST['edesc']) ? strip_tags($_POST['edesc']) : '');  
					$staffname = (isset($_POST['staffname']) ? strip_tags($_POST['staffname']) : '');  
					$staffid = (isset($_POST['staffid']) ? strip_tags($_POST['staffid']) : ''); 
					
					$eventlocation = (isset($_POST['eventlocation']) ? strip_tags($_POST['eventlocation']) : '');
					$resc = (isset($_POST['resc']) ? strip_tags($_POST['resc']) : ''); 
					$notes = (isset($_POST['notes']) ? strip_tags($_POST['notes']) : ''); 
					
					$stdate = $_POST['stdate']; 
					 
					
					$stime = $_POST['stime']; 
					$entime = $_POST['entime']; 
					 
					 
					}
					
					
					// Connect to server and select database. 


					$con = mysql_connect("localhost","root","");	
					if (!$con)
					{
						die('Could not connect:'.mysql_error());
					}
					 
					mysql_select_db("project",$con);

					///////////////

					//////////////////
					$stdate = $_POST['stdate']; 
					$entime = $_POST['entime']; 
					$eloc = $_POST['eventlocation'];
					$stime = $_POST['stime']; 
					$a= mysql_query("SELECT stdate, stime, entime, elocation from event");
					while($r = mysql_fetch_array($a, MYSQL_ASSOC)) {
					$stdatesave = $r['stdate'];
					$sttimesave = $r['stime'];
					$entimesave = $r['entime'];
					$elocation = $r['elocation'];
					 
						   if ($stdate == $stdatesave){
						   		if($stime >= $sttimesave){
									if($entime >= $entimesave){
										if($eloc == $elocation){
											$wrong="true";
											 echo "<script language='javascript'>";
											 echo "alert('The booking date and time is not available.Please try again.');";
											 echo "window.location='addnew.php';";
											 echo "</script>";
								   	}
								}
							}	
						}
					}
					
					if($wrong!=true){
					
					$sql="INSERT INTO event (ename, edesc, staffname, stdate, stime, entime, elocation, resc, notes)
					VALUES
					('$_POST[eventname]','$_POST[edesc]','$username', '$_POST[stdate]', '$_POST[stime]', '$_POST[entime]', '$_POST[eventlocation]','$_POST[resc]','$_POST[notes]')"; 
					
					$result=mysql_query($sql);
					
					if($result!=null){
					
					
					echo "<p>Event Added";
					echo "</br>Below are the list of all your bookings";
				 
					$sql="SELECT * FROM event WHERE staffname='$username'";
					$result=mysql_query($sql);

					while($rows=mysql_fetch_array($result)){
					?>
					<table width="100%" border="0" cellspacing="1" cellpadding="0">
					
					<tr align='center'>
					<td align="center"><strong><u>Event ID</u></strong></td>
					<td><?php echo $rows['eventID']; ?></td>
					</tr>
					
					<tr align='center'>
					<td align="center"><strong><u>Event Name</u></strong></td>
					<td><?php echo $rows['ename']; ?></td>
					</tr>

					<tr align='center'>
					<td align="center"><strong><u>Description</u></strong></td>
					<td><?php echo $rows['edesc']; ?></td>
					</tr>
					
					<tr align='center'>
					<td align="center"><strong><u>Start Date</u></strong></td>
					<td><?php echo $rows['stdate']; ?></td>
					</tr>
					
					<tr align='center'>
					<td align="center"><strong><u>Time</u></strong></td>
					<td><?php echo $rows['stime']; ?></td>
					</tr>
					
					</table>
					<?php
					}
					echo "<a href='index.php'>Return to Home</a>";
					

				}
				}

					mysql_close($con) 
					
				?>  	
         
				</div>
				</div>
				<div id="footer"></div>
				</div>
</body>
</html>
