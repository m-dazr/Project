<!DOCTYPE HTML>
<html>

<head>
  <title>Event updated</title>
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
         <h1><a href="index.php">System<span class="logo_colour">Administrator</span></a></h1>
          <h2>
		  <?php
		  
			session_start();
			//error_reporting(0);
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
			
			 </h1>
			<?php
// Connect to server and select database.
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("project")or die("cannot select DB");



// the values inside the [] is from update.php form 'input name' of each field

$eventname = $_POST['evname'];
$edesc = $_POST['edesc'];
$stdate = $_POST['stdate'];
$stime = $_POST['stime'];
 
$entime = $_POST['entime'];
$elocation = $_POST['elocation'];
$resc = $_POST['resc'];
$notes = $_POST['notes'];
$id = $_POST['id'];



// update data in mysql database 
$sql="UPDATE event SET ename='$eventname', edesc='$edesc', stdate='$stdate', stime='$stime' , entime='$entime', elocation='$elocation', resc='$resc', notes='$notes' WHERE eventid='$id'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Your event has been successfully updated";
echo "<BR>";
 
// Retrieve data from database 
$sql="SELECT * FROM event WHERE eventID='$id'";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>
<table width="100%" border="0" cellspacing="1" cellpadding="0">

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
<td align="center"><strong><u>Location</u></strong></td>
<td><?php echo $rows['elocation']; ?></td>
</tr>

<tr align='center'>
<td align="center"><strong><u>Resources</u></strong></td>
<td><?php echo $rows['resc']; ?></td>
</tr>


<tr align='center'>
<td align="center"><strong><u>Notes</u></strong></td>
<td><?php echo $rows['notes']; ?></td>
</tr>



</table>


<?php
echo "<a href='admin.php'>Return to Home</a>";
}

else {
echo "ERROR";
}

?>
		
		
		
		
         
      </div>
    </div>
    <div id="footer">
      Copyright &copy; FRS | <a href="http://validator.w3.org/check?uri=referer"> </a> | <a href="http://jigsaw.w3.org/css-validator/check/referer"> </a> | <a href="http://www.html5webtemplates.co.uk"> </a>
    </div>
  </div>
</body>
</html>
