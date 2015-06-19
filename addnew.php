<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start();?>

<head>
  <title>Add Event</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!--script language="javascript" src="js/calendar.js"></script-->
     <script src="date/datetimepicker_css.js"></script>
	 <script>
  function checkform(){
  
  if ((document.addnew.eventname.value.length < 2)){
     alert("Please enter an event name")
  return false}

  if ((document.addnew.stdate.value.length < 1)){
     alert("Please select a valid date")
  return false}
  
 
  
  if ((document.addnew.eventlocation.value.length < 2)){
     alert("Please select a venue")
  return false}
  }
  </script>
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

//------------------------------------->
function checkDate(arzi)
{
	stime = arzi.value;
	window.location.href('addnew.php?stime='+stime);

}




</script>
  
  
  
  
  
  
  
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
		 include 'menu.php';
		 
		 ?>
		
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here  -->
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
			
		<h2>New Booking</h2>	
	
		
		<!--FORM ADD NEW BOOKING                       REMEMBER CHANGE BACK ACTION-->	   
			
        <form method='POST' action='newevent2.php' name='addnew' onSubmit='return checkform()'>
		 
		<table>
		
			
		<tr>
		<td>Event Name
		<td>	<input type='text' name='eventname' maxlength='75' size='30'>
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Event Description
		<td>	
				<textarea name="edesc" rows="5" cols="25"></textarea>
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Event Location
		<td>
		
		<select name="eventlocation" onChange='checkDate(this)'>
		<option value=" "></option>
		<option value="ConfRoomA">Conference Room A</option>
		<option value="ConfRoomB">Conference Room B</option>
		<option value="MeetingRoom ">Meeting Room 1</option>
		<option value="MeetingRoom2 ">Meeting Room 2</option>
		<option value="MediaRm">Media Room</option>
		<option value="Comlab1">Computer Lab 1</option>
		<option value="Comlab2">Computer Lab 2</option>
		
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Select the date
		<td>
		<input type="Text" name='stdate' id="stdate" maxlength="25" size="25" readonly="TRUE">
		<img src="date/images2/cal.gif" alt="" onclick="javascript:NewCssCal(&#39;stdate&#39;,&#39;ddMMMyyyy&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;future&#39;)" style="cursor:pointer">
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Start Time
		<td>		
		
		<select name="stime" >
		
		<option value="0900">9 AM</option>
		<option value="1000">10 AM</option>
		<option value="1100">11 AM</option>
		<option value="1300">1 PM</option>
		<option value="1400">2 PM</option>
		<option value="1500">3 PM</option>
		<option value="1600">4 PM</option>
		 
		 
		</td>
		</td>
		</tr>  
		
		<tr>
		<td>End Time
		<td>
		
		<select name="entime">
		
		 
		<option value="1000">10 AM</option>
		<option value="1100">11 AM</option>
		<option value="1200">12 PM</option>
		<option value="1300">1 PM</option>
		<option value="1400">2 PM</option>
		<option value="1500">3 PM</option>
		<option value="1600">4 PM</option>
		<option value="1700">5 PM</option>
		
		 
		</td>
		</td>
		</tr>  
		
		
		<tr>
		<td>Add.Resources
		<td>
		
		<select name="resc">
		<option value="none">None</option>
		<option value="Projector">Projector</option>
		<option value="Laptop">Laptop</option>
		<option value="Media">Media Player</option>
		
		 
		</td>
		</td>
		</tr>
		
		<tr>
		<td>Notes
		<td>	
				<textarea name="notes" rows="5" cols="25"></textarea>
		</td>
		</td>
		</tr>
		

		<td></td>
		<td><input type='submit' name='submit' value='Add Event'>
			<input type='reset' name='reset' value='Clear'>
		
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
