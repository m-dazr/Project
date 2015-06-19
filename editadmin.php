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
function myPopup1() {
window.open( "floorplans/confa.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup2() {
window.open( "floorplans/confb.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup3() {
window.open( "floorplans/meet1.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup4() {
window.open( "floorplans/meet2.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup5() {
window.open( "floorplans/mediarm.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup6() {
window.open( "floorplans/compl1.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

function myPopup7() {
window.open( "floorplans/compl2.jpg", "myWindow", 
"status = 1, height = 450, width = 600, resizable = 0" )
}

//-->
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
      <div class="sidebar">
        <!-- insert your sidebar items here --> 
		 <h3>Room Layouts</h3>
        <ul>
          <li><a href="#" onclick="myPopup1()"> Conference Room A </a></li>
		  <li><a href="#" onclick="myPopup2()"> Conference Room B </a></li>
          <li><a href="#" onclick="myPopup3()"> Meeting Room 1 </a></li>
		  <li><a href="#" onclick="myPopup4()"> Meeting Room 2 </a></li>
		  <li><a href="#" onclick="myPopup5()"> Media Room</a></li>
		  <li><a href="#" onclick="myPopup6()"> Computer Lab 1</a></li>
		  <li><a href="#" onclick="myPopup7()"> Computer Lab 2</a></li>
        </ul>
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

// get value of id that sent from address bar
$id=$_GET['eventID'];


// Retrieve data from database 
$sql="SELECT * FROM event WHERE eventID='$id'";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>
<form name="form1" method="post" action="editadmin_ac.php">




<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>

<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update Event</strong> </td>
</tr>
 
<tr align='center'>

<td align="center"><strong>Event Name</strong></td>
<td align="center"><input name="evname" type="text"  size='50' value="<? echo $rows['ename']; ?>"></td>
</tr>

<tr>
<td align="center"><strong>Description</strong></td>
<td align="center"><input name="edesc" type="text"   size='50' value="<? echo $rows['edesc']; ?>" size="15"></td>

</tr>

 

		<tr>
		<td>Start date
		<td>
		<input type="Text" name='stdate' id="stdate" value="<? echo $rows['stdate']; ?>" maxlength="25" size="25" readonly="TRUE">
		<img src="date/images2/cal.gif" alt="" onclick="javascript:NewCssCal(&#39;stdate&#39;,&#39;ddMMMyyyy&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;future&#39;)" style="cursor:pointer">
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Start Time
		<td>
		
		<select name="stime">
		<option value="<? echo $rows['stime']; ?>"></option>
		<option value="9AM">9 AM</option>
		<option value="10AM">10 AM</option>
		<option value="11AM">11 AM</option>
		<option value="1PM">1 PM</option>
		<option value="2PM">2 PM</option>
		<option value="3PM">3 PM</option>
		<option value="4PM">4 PM</option>
		 
 
		 
		</td>
		</td>
		</tr>  
		
		 
		<tr>
		<td>End Time
		<td>
		<select name="entime">
		<option value="<? echo $rows['entime']; ?>"></option>
		 
		<option value="10AM">10 AM</option>
		<option value="11AM">11 AM</option>
		<option value="12PM">12 PM</option>
		<option value="1PM">1 PM</option>
		<option value="2PM">2 PM</option>
		<option value="3PM">3 PM</option>
		<option value="4PM">4 PM</option>
		<option value="5PM">5 PM</option>
		
		</td>
		</td>
		</tr>  


<tr>
<td align="center"><strong>Location</strong></td>
<td>
<select name="elocation">
<option value="<? echo $rows['elocation']; ?>"></option>
<option value="ConfRoomA">Conference Room A</option>
		<option value="ConfRoomB">Conference Room B</option>
		<option value="MeetingRoom ">Meeting Room 1</option>
		<option value="MeetingRoom2 ">Meeting Room 2</option>
		
		<option value="MediaRm">Media Room</option>
		<option value="Comlab1">Computer Lab 1</option>
		<option value="Comlab2">Computer Lab 2</option>
</td>
</tr>

<tr>
<td align="center"><strong>Resources</strong></td>
<td>
<select name="resc">
<option value="<? echo $rows['resc']; ?>"></option>
<option value="none">None</option>
<option value="Projector">Projector</option>
<option value="Laptop">Laptop</option>
<option value="Media">Media Player</option>
</tr>

<tr>
<td align="center"><strong>Notes</strong></td>
<td align="center"><input name="notes" type="text" size='50' value="<? echo $rows['notes']; ?>" size="15"></td>

</tr>


 
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" id="id" value="<? echo $rows['eventID']; ?>"></td>
<td align="center"><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?

// close connection 
mysql_close();

?>
		
		
		
		
		
         
      </div>
    </div>
 <div id="footer">
      Copyright &copy; FRS |  |  |  
    </div>
  </div>
</body>
</html>
