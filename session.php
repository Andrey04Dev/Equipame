<?php
   include('conexion.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from tbl_users where user = '$user_check' ");
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>