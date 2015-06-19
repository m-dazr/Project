<!-- Last Modified 24-12-2009 by Menuka Walpitagamage -->
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
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
    <h3><span></span><hr>
    </h3>
    
    <font size="3" face="Bookman Old Style, Book Antiqua, Garamond">
    <?php
session_start();

session_destroy();

echo "You've successfully logged out. <a href='login.php'>Click here </a>to return";

?>
  </div>
</div>
<script language="javascript" type="text/javascript">  
    holderBorder.render('content');
</script>
</body>
</html>
	 