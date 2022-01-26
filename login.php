
<?php
$conn=mysqli_connect("localhost","root","","test1");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT UserName FROM userdata WHERE UserName= '".$myusername."' and Password = '".$mypassword."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['loggedin'] = true;
						$_SESSION['username']=$myusername;
          //$_SESSION['varification_id']=$row['id_verification'];
         header("location:index.php");
      }else {
        session_destroy();
        echo"<script type='text/javascript'>alert('invalide login candidate')</script>";
         header("location:index.php");

      }
   }
?>
