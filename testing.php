<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
    
    <link href = "css/jquery-ui.css" rel = "stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="background:#d3d3d3;height:375px;width:278px;filter:blur(5px);">
		<img class="hellow" src="images/image1.jpg" style="position:relative;left:14px;top:14px;height:200px;width:200px;" onload="unique();">
	</div>
	<script>
		function unique(){
			alert('hello');
		  var x = $(".hellow").position();
		  alert("Top: " + x.top + " Left: " + x.left);

		}
	</script>
</body>
</html>
