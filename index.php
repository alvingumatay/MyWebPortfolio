<!DOCTYPE html>
<html lang="en" class="no-js">
<meta charset="utf-8">
<head>
	<title>MY | PORTFOLIO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="./css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
</head>
<body>
	<o id="top"><p id="arrow"></p></o>  
	<?php include('includes/nav.php');?>
	<?php include('includes/section.php');?>
	<?php include('includes/footer.php');?>
	
     
   </body>
   <script type="text/javascript">
   	$(window).scroll(function(){
      if($(window).scrollTop() > 500)
      {
      	$("o").fadeIn();
      }
      else
      {
      	$("o").fadeOut();
      }
   	});
   	$("o").click(function(){
   		$("html").animate({scrollTop:0},100);
   	});
   </script>
 
    
</html>