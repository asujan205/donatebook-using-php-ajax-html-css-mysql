<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
    
    <link href = "css/jquery-ui.css" rel = "stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">

<style>
		
</style>
</head>
</head>
<body>
	<div class="content">
		<div id="nav">
			
		</div>
		<div class="body">
			
		</div>	
	</div>

<script>
	indexData();
	function indexData()
    {
      $.ajax
      (
      {
        url:"indexData.php",
        method:"POST",
        data:{},
        success:function(data){
        	$('.body').append(data);
        }
      }
      );
      

    }
</script>
</body>


</html>