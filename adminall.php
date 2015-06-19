<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Edit Event</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
       <script src="date/datetimepicker_css.js"></script>
  <script type="text/javascript">
  <!--
function confirmPost()
{
var agree=confirm("Are you sure you want to delete?");
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
      
      <div id="content">
        <!-- insert the page content here -->
		<h1>
		<?php
			$today = date("D F j, Y");
			PRINT "$today";
			?>
			
			 </h1>
			 <?php
 

// Connect to server and select database.
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("project")or die("cannot select DB");

 


// Retrieve data from database 
$sql="SELECT * FROM event";
$result=mysql_query($sql);
$numrows = mysql_num_rows($result);

if ($numrows > 0){
			
			while ($row = mysql_fetch_assoc($result)){
			
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
					<th width='50'></th>
					<th width='50'></th>
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
			<td width='150' align="center"><a href="editadmin.php?eventID=<?php echo $row['eventID']; ?>">edit</a></td>
		
			
			
			 <!--DELETE-->
			<td width='150' align="center"><a href="delete.php?eventID=<?php echo $row['eventID']; ?>" onClick="return confirmPost()">delete</a></td>
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
