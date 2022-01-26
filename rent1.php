<?php
session_start();
$_SESSION['book_id']=$_POST['book_id'];
$_SESSION['book_name']=$_POST['book_name'];
$_SESSION['rent_price']=$_POST['rent_price'];
?>