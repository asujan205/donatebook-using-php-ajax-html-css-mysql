<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main-header-menu.js"></script>

    
    <link href = "css/jquery-ui.css" rel = "stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
<style>
	.modal {
  display: none; /* Hidden by default */
  position:fixed ; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 30%;
  top: 30%;  
  width: 30%; /* Full width */
  height: 51%; /* Full height */
  overflow: ; /* Enable scroll if needed */
  background-color: ;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 0% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; 
}
{
    position:absolute;
    border: none;
    height: 35px;
    background: #1c8adb;
    color: #fff;
    top:300px;
    font-size: 16px;
    border-radius: 4px;
    width:200px;
    left:39px;

}
.rent,.cancel_rent:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}
    	.gst20{

            margin-top:20px;

        }

        #hdTuto_search{

            display: none;

        }

        .list-gpfrm-list a{

            text-decoration: none !important;

        }

        .list-gpfrm li{

            cursor: pointer;

            padding: 4px 0px;

        }

        .list-gpfrm{

            list-style-type: none;

            background: #d4e8d7;
            z-index: 1;
            width:33%;
            position:fixed;
            top:60px;
            left:29%;

        }

        .list-gpfrm li:hover{

            color: white;

            background-color: #3d3d3d;

        }
        
</style>
</head>
</head>
<body onload="indexData()">
	<div class="content">
		<header class="main-header" style="z-index: 1;">
            <div class="container" style="z-index: 1">
        	 <?php
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            include('nav2.php');
          }

            else{
              include('nav1.php');
            }
        ?>
        </div>
    	</header>
    	
		
			<div style="width: 100%;height: 380px;background-color: gray;" onclick="fn();">
        	<ul class="list-gpfrm" id="hdTuto_search"></ul>
    		</div>

    		<div style="width: 100%;height:85px;background: var(--main-header-primary-color);" onclick="fn();">
        
    		</div>
    	<div style="position: relative;">
    	<div class="body" style="position: relative;" onclick="fn();" id="bodies">
    		
		</div>	
		</div>
	</div>



<div id="id02" class="">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  
     <div class="donation">
        
        <h4>Fill up the details:</h4>
            <form>
              <p>Name</p>
            <input type="text" name="name"  id="name" placeholder="Enter name here"required>
             <p>Address</p>
                      <input type="text" id="address" name="address" placeholder="Enter address here"required>
           <p>Phone No.</p>
            <input type="text" id="phone" name="number" placeholder="Enter your phone no."required>
             <p>Books for donation</p>
            <input type="text" name="book" id="itemname" placeholder="Enter book donated"required>
            <p>No. of books for donation.</p>
            <input type="text" name="no"  id="items_number" placeholder="Enter no of books"required>
           <input type="submit" value="Donate us"  class="donate" id="alertconfirm"> <br><br><br><br><br>
           <input type="button"  class="ccl" style="width: 70%;position: absolute;left: 13%;bottom: 10px;" name="" value="Cancel" onclick="document.getElementById('id02').style.display='none'">
             
             
            </form>
    </div>
  </div>
    <div> 

    <button style="position: fixed;bottom: 3px;left: 2%;padding: 5px;border-radius: 8px;background-color: #1c8adb;color: white;height: 50px;width: 100px;"  onclick="document.getElementById('id02').style.display='block'">Donate</button>
  </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top" style="position: fixed;right: 2%; bottom: 10px;padding: 5px;border-radius: 8px;background-color: #1c8adb;color: white;height: 50px;width: 50px;">Top</button>
    <div class="login-box" style="display:none;">
      <img src="images/avatar.png" class="avatar"><br><br>
      <h1 align="center">Sign In</h1>
      <form action="login.php" method="POST">
        <p>Enter Username</p>
        <input type="text" name="username" placeholder="Enter Username"required>
        <p>Enter Password</p>
        <input type="password" name="password" placeholder="Enter Password"required>
        <input type="submit" name="submit" value="Sign in" id="alertconfirm">   
      </form>
    </div>
<div id="id07" class="modal">
  <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
  
    <div class="container">
        <div id="modal-content">
        <label for="name"><b>Yours Name:</b></label><br>
        <input type="text" class="rentname text1" id="rentname" ><br>
        <label for="address"><b>Supply the address:</b></label><br>
        <input type="text" class="rentaddress text1" id="rentaddress"><br>
        <label for="phone"><b>Supply yours phone:</b></label><br>
        <input type="text" class="rentphone text1" id="rentphone"><br>


        <div class="clearfix">
            <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancel_rent">Cancel</button>
            <button type="button" class="rent">rent</button>
      </div>
    </div>
</div></div>
    


  

<script>
    

	function checking(a){
        domRect = document.getElementById(a).getBoundingClientRect();
        if(domRect.x<1100){
        x=domRect.x+240;
        y=domRect.y-340;}
        else{
            x=domRect.x-340;
            y=domRect.y-340;
        }
        axis=x+'px';
        obxes=y+'px';
        document.getElementsByClassName("modal")[0].style.position="fixed";
        document.getElementsByClassName("modal")[0].style.left=axis;//=x+'px';
        document.getElementsByClassName("modal")[0].style.top=obxes;//alert(y);
    }
	function enlarge(a){
		
		var b="alertconfirm"+a;
		setTimeout(function(){document.getElementById(b).style.display="block";document.getElementById(a).style.height=500;}, 1200);
		
	}
	function myfunc(){
		document.getElementById('myDropdown').style.display="block";
	}
	function fn(){
		if(document.getElementById('myDropdown').style.display="block"){
			document.getElementById('myDropdown').style.display="none";
		}
	}

	function indexData()
    {
        var search=$('#sch').val();
        if(search!="")
        {

		    $.ajax({
		    	url:'indexData.php',
		    	method:'POST',
		    	data:{search:search},
		    	success:function(data){
		    		$('.body').html(data);

		    	}

		    });
		}
		else
		{
	        $.ajax
	        (
		        {
		        	url:"indexData.php",
		        	method:"POST",
		        	success:function(data){
		        		$('.body').html(data);
		        	}
		      	}
	      	);
	    }
      

    }
    var v1=document.getElementById('sch');
       function myfun1(){
        v1.setAttribute('type','text');
        v1.setAttribute('value','');
        v1.setAttribute('placeholder','Search Here');
        document.getElementById('fltr').style.display="block";
        document.getElementById('sch').style.width="385px";
       }

        function searchthings(){
            var e=$('#sch').val();
            
            
            if(e!=""){
                

                $.ajax({

                    type: 'POST',

                    url: 'search.php',

                    data: {querystr:e},

                    dataType: 'json',

                    success: function(response){
                    	
                        if(response.error){

                            $('#hdTuto_search').hide();

                        }

                        else{

                            $('#hdTuto_search').show().html(response.data);

                        }

                    }

                });
            }

        };
        $(document).ready(function(){
        //fill the input
        $(document).on('click', '.list-gpfrm-list', function(e){

            e.preventDefault();

            $('#hdTuto_search').hide();
            var char='';
            var book_name = $(this).data('book_name');
            var a=book_name.split("");
            for(i=0;i<a.length-1;i++){
            	char=char+a[i];
            }
            $('#sch').val(char);
            indexData();

        });

$(document).on('click', '.rent', function(){
  
			var renter_name=$('#rentname').val();
			var renter_address=$('#rentaddress').val();
			var renter_phone=$('#rentphone').val();
			
			$.ajax({
               url:'rent.php',
               method:'POST',
               data:{renter_name:renter_name,renter_address:renter_address,renter_phone:renter_phone},
               success:function(data){
               
               	alert('thanks you yours request send to us');
               	location.reload();
               }

			});
  
		});
  
  });

        $(document).on('click','.donate',function(e){
       if(document.getElementById('name')=='')
       {
        alert('name is required');
       }
        else if(document.getElementById('address')=='')
        {
          alert('address is required');
        }
          else if(document.getElementById('phone')=='')
          {
            alert('phone number is mandetory');
          }
            else if(document.getElementById('itemname')=='')
            {
              alert('item name is required');

            }
            else if(document.getElementById('item_number')=='')
            {
              alert('item number is mandatory');
          }
        
       
     else{

      var donater_name=$('#name').val();
      var donater_address=$('#address').val();
      var donater_phone=$('#phone').val();
      var donater_book_name=$('#itemname').val();
      var donated_item_number=$('#item_number').val();

      $.ajax({
               url: 'donate.php',
               type:'POST',
               data:{doner_name:donater_name,doner_address:donater_address,doner_phone:donater_phone,book:donater_book_name,itemnumber:donated_item_number},
               success:function(data){

                
                alert('thanks you donater');
                
               }

      });
}
    });
  function rental(a,b){

document.getElementById('id01').style.display='block';

 
		
	    
  	 $.ajax({
				url:"rent1.php",
				method:"POST",
				data:{book_id:a, book_name:b},
				success:function(data)
				{
				
	               
					
				}
			});

    };


            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

            }
 
              //for toggle menu
        function openNav() {
          document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
          document.getElementById("mySidepanel").style.width = "0";
        }

</script>
</body>


</html>