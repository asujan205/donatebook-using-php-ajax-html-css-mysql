<!DOCTYPE html>
<html>
<head>
	<style>
    #id04{
      display:none;
    }
    #id05{
      display:none;
    }
#id06{
  display: none;
}
   
  </style>
</head>
<body>
	
        	<div class="container" style="z-index: 1">
            	
            	<span style="position: fixed;left: 20%;">NETORE</span>
            	<div class="btn-group" style="position: relative;left: 7.5%;">
              		<input type="button" class="b" id="sch" style="width: 170px;" value=''  onclick="myfun1();" onkeyup="searchthings();">
              		<input type="button" class="b filter1" id="fltr" value="Show Filters" style="display: none;text-decoration: underline;" >
              		<button type="button" class="b searchicon"  onclick="indexData()" style="border-left: 1px solid black;width: 13px;position: relative;"><img src="images/schicon.png" style="width: 25px;position: absolute;left: 10%; top:25%;"></button>
            	</div>
          
            	<nav class="main-header-menu">
                	<ul>
                    	<li><a href="index.php">Home</a></li>
                    	<li><a href="#re" onclick="about();">About</a></li>
	                    <li><a href="#about" onclick="contact();">Contact</a></li>
	                    <li><a href="#login" onclick="login();">Login</a></li>
	                    <li><a href="#Sign-up" onclick="signup();">Sign Up</a></li>
                	</ul>
            	</nav>
             
            </div>
     <div id="id04" class="modal">
       <div class="login-box" >
      <br><br>
      <h1 align="center">Sign In</h1>
      <form action="login.php" method="POST">
        <p>Enter Username</p>
        <input type="text" name="username" placeholder="Enter Username"required>
        <p>Enter Password</p>
        <input type="password" name="password" placeholder="Enter Password"required>
        <input type="submit" name="" value="Sign in" id="alertconfirm">   
      </form>
    </div> 
  </div>
    <div id="id05" class="modal1">
      <span onclick="document.getElementById('id05').style.display='none';" class="close" title="Close Modal">&times;</span>
      <div class="Sign-up">
        <h1 style="text-decoration: underline;">Sign Up</h1>
          <form action="signup.php" method="POST">
            <p>Username</p>
            <input type="text"  name="user_name" placeholder="Enter username here"required>
            <p>Email</p>
            <input type="text" name="user_email" placeholder="Enter email here"required>
            <p>Enter Password</p>
            <input type="password"  name="user_password" placeholder="Enter password here"required>
            <p> Input yours identification:</p>
            <select  name="id_varification_type"style="width: 100%;padding: 7px;border-radius:6px;text-align: center;">
              <option value="">Citizenship</option>
              <option value="">Passport</option>
              <option value="">License</option>
            </select>
               <p> Enter identification number:</p>
            <input type="text" name="id_varification_code" placeholder="Enter your id code" style="width: 100%;padding: 7px;border-radius:6px;">
            <input type="submit" value="Sign up" style="position: absolute;top: 348px;" id="alertconfirm">   
            </form>
            </div>
          </div>
            <div id="id06">
         <div class="contact-box">
        <h1>Need a Help?</h1>
            <form>
            <p>Name</p>
            <input type="text" name="username" placeholder="name"required>
            <p>E-mail</p>
            <input type="text" name="email" placeholder="email"required>
            <p>Message</p>
            <input type="text" name="Message" placeholder="Message you want to send to us"required>
           <center> <input type="submit" name="submit" value="Send"></center>   
            </form> 
    </div> 
    </div>  
<script>
  function login(){
document.getElementById('id04').style.display="block";

  }
  function signup(){
document.getElementById('id05').style.display="block";
  }
  function contact(){
    document.getElementById('id06').style.display="block";
  }
</script>
        
    
</body>
</html>