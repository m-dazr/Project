<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Search</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script>
  function checkform(){

  if ((document.search.k.value.length < 1)){
     alert("Please enter a keyword to search")
  return false}
  }
  </script>
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
			
			 </h1>
			<h3><p>To search for a booking, enter a keyword related to your search below.</h3>
			
			
		
		<center>
		
		<h2>Search Event</h2>
		<form action='./searchev.php' method='get' name='search' onSubmit='return checkform()'>
			<input type='text' name='k' size='50' /> 
			<input type='submit' value='Search'>
		</form>
	</center>
		
		
		
		
       </div>  
      </div>
    </div>
    <div id="footer">
      Copyright &copy; FRS |  |  |  
    </div>
  
</body>
</html>
