<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>website of cake</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<?php include './inc/m.php';  ?>

<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Website of Cake</a></h1>
			
		</div>
	</div>
</div>
<div id="wrapper"> 
    <!-- end #header -->

	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/black forest.jpg" width="920" height="400" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to our website of cake </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Name: <input type="text" name="t1"></p>
					<p>contact number: <input type="number" name="t2"></p>
					<p>Address of cake delivery: <input type="textarea" name="t3"></p>
					<p>Date and time of order: <input type="datetime-local" name="t4"></p>
					<p>Types of cake:<input list="lang" name="t6">
          <datalist id="lang">
          <option value="strawbery">Strawbery cake</option>     
          <option value="chocolate">Chocolate cake</option>
          <option value="butter">Butter cake</option>
          <option value="black forest">Black forest cake</option>
          </datalist> <br/></p>
                    <p><input type="submit" name="submit" value="order" style="color: hotpink;"></p>  
				</div>
			</div>
				
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->


		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 

</div>
<div id="footer">
	<p>Website manage by @Bhavisha Nayi.</p>
</div>
<!-- end #footer -->

</body>
</html>
