<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main-header-menu.js"></script>
<link href="style.css" rel="stylesheet">
    
    <link href = "css/jquery-ui.css" rel = "stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">
<style>
	.modal {
  display: none; /* Hidden by default */
  position:fixed ; /* Stay in place */
  z-index: 1; /* Sit on top */
  width: 20%; /* Full width */
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
.close {
  position: absolute;
  right: 0px;
  top: -10px;
  font-size: 40px;
  font-weight: bold;
  color: #f4511e;
}
.rent,.cancel_rent
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

            
            position:absolute;
            left:9.5%;
            width:33%;

            
            

        }

        .list-gpfrm li:hover{

            color: white;

            background-color: #3d3d3d;

        }
        .text1{
		 padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #0fd;
  box-sizing: border-box;
  border-radius:10px;
  width:100%;
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
    	<div style="width: 100%;height: 70px;z-index: 1;">
    	</div>
    	
		
			<div style="position:relative;width: 100%;height: 450px;background:url('images/library.jpg');" onclick="fn();">
        		<ul class="list-gpfrm" id="hdTuto_search"></ul>
        		<img src="images/image2.jpg" style="position:absolute;height:85%;width:19.4%;top:8.55%;border:3px;border-radius:7px;left:5.45%;" alt="Card One" class="cardd card1" id="card1" >            
                <img src="images/design.jpg" alt="Card Two" class="cardd card2" style="position:absolute;left:36.35%;height:97%;width:23% ;top:7px;" id="card2" >
             	<img src="images/library.jpg" alt="Card Two" class="cardd card3" style="position:absolute;left:73%;height:85%;width:19.4%;top:8.55%;" id="card3">
    		</div>

    		<div style="width: 100%;height:85px;background-color: grey;" onclick="fn();">
        
    		</div>
    	<div style="position: relative;">
    	<div class="body" style="position: relative;" onclick="fn();">
    		
		</div>	
		</div>
	</div>
	 
    
    
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  
    <div class="container">
    	<div id="modal-content">
        <label for="name"><b>Yours Name:</b></label><br>
        <input type="text" class="rentname text1" id="rentname" ><br>
        <label for="address"><b>Supply the address:</b></label><br>
		<input type="text" class="rentaddress text1" id="rentaddress"><br>
		<label for="phone"><b>Supply yours phone:</b></label><br>
		<input type="text" class="rentphone text1" id="rentphone"><br>


      	<div class="clearfix">
        	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel_rent">Cancel</button>
        	<button type="button" class="rent">rent</button>
      </div>
    </div>
</div></div>
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
<script>
	//to display dropdown
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