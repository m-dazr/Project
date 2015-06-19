<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome - Please Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/shadedborder.js"></script>
<script language="javascript" type="text/javascript">
  var holderBorder = RUZEE.ShadedBorder.create({ corner:20, border:2 });
</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<body background="images/bg.jpg">

</head>
<body>
 
<div id="content">


  <div id="innerholder">
    <h3><span></span><hr></h3>
		<form action='checklg.php' method='POST'>  
		 <font size="3" face="Bookman Old Style, Book Antiqua, Garamond">
		
        	<div>
            	<div id="label"><b>User Name :</b></div>
                <div class="roundedfield" >  
                    <input name="username" type="text"/>
                </div>
            </div>
            <div>
                <div id="label"><b>Password :</b></div>
                <div class="roundedfield" > 
                    <input type="password" name="password" />
                </div>    
            </div>
            <input type="submit" value="Enter" id="loginbutton" name="loginbutton"/>
			</font>
		</form>
  </div>
</div>
<script language="javascript" type="text/javascript">  
    holderBorder.render('content');
</script>
</body>
</html>