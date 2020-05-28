<?php
session_start();
   if (isset($_GET['ID'])) {    
    $mysqli = new mysqli ("localhost","root","","escuela");
     $SQL = "SELECT * FROM materias WHERE ID = '".$_GET['ID']."'";      

     $datos = $mysqli->query($SQL);
     $registros = $datos->fetch_assoc();
   $VArid = $registros["ID"];
     $varmateria = $registros["MATERIA"];
    $varturno = $registros["TURNO"];
     $varprofe = $registros["PROFESOR"];
     $varSalon = $registros["SALON"];
   }else{
         $varmateria = "";
          $VArid = "";
          $varprofe="";
          $varturno="";
          $varSalon="";
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
        <li><a>Inicio</a></li>
        <li>
        <a >Examinar</a>
      <div style="width: 50px;">
          <ul>
            <li ><a class="titulo naranja" >Materias</a></li>
            <li class="titulo rojo"><a href="../Consulta.php">Consulta</a></li>
          </ul>
         
        </div>
        </li>
        <li><a >Contacto</a></li>
        <li><a href="../../PROFESORES/Consulta.php"> <?php echo $_SESSION['NombreUsuario']; ?></a>
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
        <h2> Actualizar Materia</h2>
      </td>
    </tr>
    <tr>
          <td align="center"  >
            <table width="50%" style="background-color: #95F5B6;">
              <tr>
                <td align="center" colspan="2">
                  Id<br>
                 <input type="text" disabled="false" size="2" value="<?php echo $VArid ?>">
                  <input type="hidden" name="id"  value="<?php echo $VArid ?>">
                </td>
              </tr>
              <tr>
                <td align="center" colspan="2">
                  Materia<br>
  <input type="text" placeholder="Materia" name="MATERIA" id= "idMateria" value="<?php echo utf8_encode($varmateria)?>" maxlength="30" size="30">
                </td>
              </tr>
                 <tr>    
            <td align="center" colspan="2">
              Turno<br>
              <select name="TURNO" id="idTURNO" required style="background-color: #95F5B6;">
                <option value="<?php echo $varturno ?>"><?php echo $varturno ?></option>
                <option value="Ves">Ves</option>
                <option value="Mat">Mat</option>
              </select>
            </td>
          </tr>
                         <tr>
                         <td align="center" colspan="2">
                          Profesor<br>
       <input type="text" id="IDProfesor" placeholder="Profesor" maxlength="40" name="PROFESOR" value="<?php echo utf8_encode($varprofe)  ?>" size="40">
                         </td>
                    </tr>
                      <tr>
                         <td align="center" colspan="2">
                          Salón<br>
                              <input type="text" placeholder="Salón" name="SALON" id="idSalon" value="<?php echo $varSalon ?>" maxlength="10" size= "4">
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

    function EnvUpdate(){
    document.getElementById("update").submit();
  }
 
    </script>