<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Usamos el nombre de usuario enviado de nuestroformulario
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id_users FROM tbl_users WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // Si el resultado combinado $myusername y $mypassword,fila de la tabla debe estar en 1 fila
      
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: Admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Equípame Zona Sur</title>
      <meta name="keyword" content="HTML5, CSS3, JavaScript">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

      <link rel="shortcut icon" href="rsc/favicon.png"/>
      <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="js/jquery.js"></script>
      <script src="js/funciones.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      
   </head>
      <body>

      <nav style="background-color: #000">
          <div class="nav-wrapper">
          <a href="#" class="brand-logo center" style="font-size: 15px;">Login</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            
            <ul class="side-nav" id="mobile-demo">
              <li><a href="index.php"><i class="mdi-action-home left"></i>Principal</a></li>
            <li><a href="Acercade.php"><i class="mdi-action-info left"></i>Acerca de</a></li>
            </ul>
          </div>  
      </nav>
      <div class="container center-align">
      <div class="row">
            <div class="col s12 ">
            <div align = "center">
          <div class="col s12 m12 l90">
         <div class="container center-align" style="margin-top: 30px">
            <img class="responsive-img materialboxed" data-caption="CSS3 Image" src="images/EQUIPAME.png"/><br></br>
         </div>
         <div clas="container" style = " background: transparent; width:300px; height: 400px; padding: 10px 10px 5px 5px; border-radius: 10px; border: solid 3px #333333; border-color: #088A68" align = "center">

            <h6 class="center-align" style = "color:#000; "><b>Digite el usuario y contraseña</b></h6>
            
            <div class="container center-align" style = "margin:40px">
               
               <form action = "" method = "post">
                  <input type = "text" name = "username" placeholder="Usuario" class = "" style="color:#088A68" /><br /><br />
                  <input type = "password" name = "password" placeholder="Contraseña" class = "" style="color:#088A68" /><br/>
                  <button id="entrar" name="btn_entrar" class="btn waves-effect waves-ligth"  style="background-color: #088A68;  margin-top: 15px;"  type="submit "   onclick="validar()">Entrar</button>
                  </div>
               </form>
               
            </div>
            
         </div>
         
      </div>
   </div>
      
   </div>
 </div>
 </div>

      
         <script type="text/javascript">
         $(document).ready(function() {
         $('select').material_select();
         }); 
      </script>
      <script type="text/javascript">
         $(".button-collapse").sideNav();
      </script>

       <footer class="page-footer" style="background-color: #088A68";>
            
            <div class="footer-copyright" style="background-color: #000";>
              <div class="container">
              Realizada en ©2017 
              <a class="grey-text text-lighten-4 right" href="#!">@Derechos reservados</a>
              </div>
            </div>
      </footer>
   </body>
</html>
