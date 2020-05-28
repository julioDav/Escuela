<?php
session_start();
   if (isset($_GET['ID'])) {    
    $mysqli = new mysqli ("localhost","root","","escuela");
     $SQL = "SELECT * FROM alumnos WHERE ID = '".$_GET['ID']."'";      

     $datos = $mysqli->query($SQL);
     $registros = $datos->fetch_assoc();
   $VArid = $registros["ID"];
     $varnom = $registros["NOMBRE"];
    $varcorreo = $registros["EMAIL"];
     $varpassword = $registros["PASSWORD"];
     $vargrado = $registros["GRADO"];
     $vargrupo = $registros["GRUPO"];
     $varturno = $registros["TURNO"];
     $vardireccion =$registros["DIRECCION"];
     $vartelefono =$registros["TELEFONO"];
    
   }else{
          $vartelefono="";
         $varnom = "";
          $VArid = "";
          $vargrado="";
          $vargrupo="";
          $varpassword="";
          $varcorreo="";
          $vardireccion="";
          $varturno="";
   }
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>SECUNDARIA TEC #9</title>
  <link rel="stylesheet" type="text/css" href="../../CSS/input.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/inicio.css">
   <script type="text/javascript" src="../../JS/veri.regis.js">  </script>
</head>
<body >
  <nav>
      <ul>
        <li><a >Inicio</a></li>
        <li><a >Contacto</a></li>
        <li><a href="../Consulta.php"> <?php echo $_SESSION['NombreUsuario']; ?></a>
          <div style="width: 150px;">
          <ul>
            <li class="titulo rojo"><a href="../../INGRESAR/cerrar.php">Cerrar Sesión</a></li>
          </ul> 
          </div></li>

      </ul>
    </nav>
    <br>
     <form  action="accion.php" method="get" id="update">
  <TABLE width="50%" align="center" style="background-color: #95F5B6; border: #D8FD4E 8px inset;" >
    <tr>
      <td align="center">
        <h2> Actualizar registro</h2>
      </td>
    </tr>
    <tr>
          <td align="center"  >
            <table width="50%" style="background-color: #95F5B6;">
              <tr>
                <td align="center" colspan="2">
                  Id<br>
                 <input type="text" disabled="false" size="2" value="<?php echo $VArid ?>" >
                  <input type="hidden" name="id"  value="<?php echo $VArid ?>">
                </td>
              </tr>
              <tr>
                <td align="center" colspan="2">
                  
                  Nombre<br>
                  <input type="text" placeholder="Nombre" name="NOMBRE" id= "idnombre" value="<?php echo utf8_encode($varnom)?>" maxlength="100" size="35">
                </td>
              </tr>
              <tr>
                <td align="center" colspan="2">
                  Grado<br>
                  <input type="text" Id="idGRADO" placeholder="Grado" name="GRADO" maxlength="1" value="<?php echo $vargrado ?>" size="4">
                </td>
              </tr>
              <tr>
                <td align="center" colspan="2">
                  Grupo<br>
                              <input type="text" Id="IdGrupo" placeholder="Grupo" maxlength="4" name="GRUPO" value="<?php echo $vargrupo ?>" size="4">
                </td>
              </tr>
                   <tr>    
    
            <td align="center" colspan="2">
               Turno <br>
              <select name="TURNO" id="idTURNO" required style="background-color: #95F5B6;">
                <option value="<?php echo $varturno ?>"><?php echo $varturno ?></option>
                <option value="Ves">Ves</option>
                <option value="Mat">Mat</option>
              </select>
            </td>
    </tr>
                         <tr>
                         <td align="center" colspan="2">
                          Password<br>
                 <input type="password" id="IDPassword" placeholder="Contraseña" maxlength="20" name="PASSWORD" value="<?php echo $varpassword ?>" size="25">
                         </td>
                    </tr>
                      <tr>
                         <td align="center" colspan="2">
                          Dirección<br>
                              <input type="text" placeholder="Dirección" name="DIRECCION" id="idDireccon" value="<?php echo $vardireccion ?>" maxlength="100" size= "30">
                         </td>
                    </tr>
                       <tr>
                         <td align="center" colspan="2">
                              Correo<br>
                              <input type="text" name="CORREO" placeholder="Correo" id="idCorreo" value="<?php echo $varcorreo ?>" maxlength="100" size= "30">
                         </td>
                    </tr>
                     <tr>
                         <td align="center" colspan="2">
                          Teléfono<br>
                              <input type="text" name="TELEFONO" placeholder="Teléfono" id="idTelefono" value="<?php echo $vartelefono ?>" maxlength="11" size= "11"> 
                         </td>
                    </tr>
                      <tr>
                         <td align="center" colspan="2">
                          Foto<br>
                          <input type="button" value="Añadir nueva Foto" onclick="foto()" class="botton" style="background-color: #f6a072;">
                      </td>
                    </tr>
                   
                    <tr>
                         <td align="center">
                          <br>
                                <input type="submit"  value= "ACTUALIZAR" onclick="EnvUpdate()">
                         </td>
                    </tr>
                   
            </table>
          </td>
    </tr>
  </TABLE>
</form>
</body>
</html>
  <script type="text/javascript">
    function foto() {
      var varid = '<?php echo $VArid ?>'; 
   window.open("PICTURE/picture.php?id="+varid, "_self");
    }
    function EnvUpdate(){
    document.getElementById("update").submit();
  }
 
    </script>