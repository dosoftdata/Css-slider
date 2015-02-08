<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF8" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Clement Mukendi" />
	<title>Css - Tips</title>
       <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"  media="all"/>
    <link href="css/css.css" rel="stylesheet" media="screen">
     <!-- favicon -->
    <link rel="icon" href="favicon-16.png" sizes="16x16">
     <!-- font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,800,600,700' rel='stylesheet' type='text/css'> 
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title">Css-Tips</h3>
   </div>
   <div class="panel-body panel-list">
   <div class="row">
      <ul class="list-listed">
      <li></li>
      <li></li>
      </ul>
   </div>
   <div class="row">
     <a class="bull"></a>
       <ul class="list-listed-cycled">
      <li></li>
      <li></li>
      </ul>
      </div>
    <div class="row">
            <div class="slider slider-horizontal" style="width: 140px;">
            <input type="text" class="span2" value="4" id="sl1">
            </div>
      </div>
   </div>
</div>
</div>
<!--http://www.eyecon.ro/bootstrap-slider/-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript">
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
        $('#sl1').slider({tooltip: 'show'});
    });
  </script>
</body>
</html>