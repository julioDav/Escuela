<?php


if(isset($_POST['Correo'])) {
    require ("../CONN/classConnectionMySQL.php");
    $Conexion = new ConnectionMySQL();
    $Conexion->CreateConnection();

    $varCorreo = $_POST['Correo'];
    $varContrasenia = $_POST['textPASSWORD'];
  
    $SQL = "SELECT * FROM alumnos 
            WHERE EMAIL ='".$varCorreo."' AND PASSWORD= md5('".$varContrasenia."')";

    if($result = $Conexion->ExecuteQuery($SQL)){
      if($row = $Conexion->GetRows($result)){
        session_start();
          $_SESSION['IdUsuario'] = $row['ID'];    
          $_SESSION['NombreUsuario'] = $row['NOMBRE'];
            ?>
          <script type="text/javascript">
            self.location = "../ALUMNOS/Consulta.php";
          </script>               
            <?php
          }else{
                  echo "<script type='text/javascript'>alert('Correo o Contraseña incorrecto');</script>";
               }
      }else{
              echo "<script type='text/javascript'>alert('Error al Iniciar sesión');</script>";
           }    
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>SECUNDARIA TEC #9</title>
<link rel="stylesheet" type="text/css" href="../CSS/input.css">
     <script type="text/javascript" src="../JS/veri.regis.js">  </script>
     <link rel="stylesheet" type="text/css" href="../CSS/inicio.css">
</head>
<body >
  <nav>
      <ul>
        <li><a href="..">Inicio</a></li>
        <li>
        <a >Examinar</a>
        <div>
          <ul>
           <li ><a class="titulo verde" >Alumnos</a></li>

            <li class="titulo rojo"><a >Iniciar Sesión</a></li>
          </ul>
            <ul>
            <li ><a class="titulo amarillo" >Profesores</a></li>
            <li class="titulo rojo"><a href="InSecionProfe.php">Iniciar Sesión</a></li>
          </ul>
     
        </div>
        </li>
        <li><a>Contacto</a></li>
      </ul>
    </nav>
  <br>

<form action="" method="post" > 
  <h1 style="color: white;" align="center">Alumnos</h1>  
	<TABLE width="30%" align="center" style="background-color: #fce766; border: #D8FD4E 8px inset;" >
    <tr>
      <td align="center">
        <h2> Iniciar Sesión</h2>
      </td>
    </tr>
    
		<tr>
          <td align="center"  >
          	<table width="60%" style="background-color: #fce766;">
    
                                  <tr>
                         <td align="center" colspan="2"> 
            <input type="email" name="Correo" placeholder="Correo" id="idCorreo" value="" maxlength="100" size= "30" required>
                         </td>
                    </tr>
                         <tr>
                         <td align="center" colspan="2">
                              <input type="PASSWORD" id="IDPassword" placeholder="Contraseña" maxlength="20" name="textPASSWORD" value="" size="25" required>
                         </td>
                    </tr>
                    <tr>
                         <td align="center" colspan="2">
                          <br>
                              <input type="submit" name="boton"   value= "Entrar">
                         </td>
                    </tr>
                    <tr>
                 <td align="right" colspan="2">
                    <a href="../ALUMNOS/REGISTRO/insert.php">Registrate Aqui</a> 
                   </td> 
                     </tr> 
                    
          	</table>
          </td>
		</tr>
	</TABLE>
</form>
</body>
</html>