    <!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/main-header-menu.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	
        	<div class="container" style="z-index: 1">
            	<span style="position: fixed;left: 2%;color: white;"><b>NETORE</b></span>
            	
            	<div class="btn-group" style="position: relative;left: 7.5%;">
              		<input type="button" class="b" id="sch" style="width: 170px;" value=''  onclick="myfun1();" onkeyup="searchthings();">
              		<input type="button" class="b filter1" id="fltr" value="Show Filters" style="display: none;text-decoration: underline;" >
              		<button type="button" class="b searchicon"  onclick="indexData()" style="border-left: 1px solid black;width: 13px;position: relative;"><img src="images/schicon.png" style="width: 25px;position: absolute;left: 10%; top:25%;"></button>
            	</div>
          
            	<nav class="main-header-menu">
                	<ul>
                    	<li><a href="index.php">Home</a></li>
                    	<li><a href="#about" onclick="about();">About</a></li>
	                    <li><a href="#services" onclick="contact();">Contact</a></li>
	                    <li><a href="#" onclick="myfunc();">Menu</a></li>
                	</ul>
            	</nav>
             <button class="main-header-dropdown-button" style="color: white;" onclick="openNav()">☰</button>
                <div id="mySidepanel" class="sidepanel">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                  <a href="#">Home</a>
                  <a href="#">About</a>
                  <a href="#">Contact</a>
                  <a href="#" onclick="myfunc();">Menu</a>
                </div>
            

	        <div class="dropdown" >
	             <div id="myDropdown"  style="display:none;" class="dropdown-content">
	                <a href="#">Settings</a>
	                <a href="#">Edit</a>
	                <a href="logou.php">Log Out</a>
	            </div>
	        </div>
          
        
        <script>
          function myfunc(){
    document.getElementById('myDropdown').style.display="block";
  };
   function contact(){
    document.getElementById('id06').style.display="block";
  }
        </script>
    
    	
</body>
</html>