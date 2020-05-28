<?php
$varnom = "";
$varTurno ="";
$varcorreo = "";
$vartelefono = "";
$varmatric = "";
$varPassw="";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>SECUNDARIA TEC #9</title>
<link rel="stylesheet" type="text/css" href="../../CSS/input.css">
     <script type="text/javascript" src="../../JS/veri.regis.js">  </script>
     <link rel="stylesheet" type="text/css" href="../../CSS/inicio.css">
</head>
<body >
  <nav>
      <ul>
        <li><a href="../..">Inicio</a></li>
        <li>
        <a >Examinar</a>
        <div>
    <ul>
            <li ><a class="titulo verde" >Alumnos</a></li>
            <li class="titulo rojo"><a href="../../INGRESAR/InSecionAlum.php">Iniciar Sesión</a></li>
            
          </ul>
          <ul>
            <li ><a class="titulo amarillo" >Profesores</a></li>
            <li class="titulo rojo"><a href="../../INGRESAR/InSecionProfe.php">Iniciar Sesión</a></li>
        
          </ul>
        </div>
        </li>
        <li><a>Contacto</a></li>
      </ul>
    </nav>
  <br>
     <form  action ="accion.php"  id="formuProfe" enctype="multipart/form-data" method="post" >

	<TABLE width="40%" align="center" style="background-color: #95F5B6; border: #D8FD4E 8px inset;" >
    <tr>
      <td align="center">
        <h2> Registro de nuevo Profesor</h2>
      </td>
    </tr>
    
		<tr>
          <td align="center"  >
          	<table width="50%" style="background-color: #95F5B6;">
          		<tr>
          			<td align="center" colspan="2">
          				<input type="text" placeholder="Nombre" name="NOMBRE" id= "idnombre" value="<?php echo $varnom ?>" maxlength="100" size="25">
          			</td>
          		</tr>
      
                     <tr>    
    
            <td align="center" colspan="2">
              <select name="TURNO" id="idTURNO" required style="background-color: #95F5B6;">
                <option value="">Turno</option>
                <option value="Ves">Ves</option>
                <option value="Mat">Mat</option>
                <option value="Mat Ves">Mat Ves</option>
              </select>
            </td>
    </tr>
               <tr>
                 <td align="center" colspan="2">
            <input type="text" name="CORREO" placeholder="Email" id="idCorreo" value="<?php echo $varcorreo ?>" maxlength="100" size= "30">
                   </td>
                    </tr>
                      <tr>
                 <td align="center" colspan="2">
            <input type="password" name="PASSW" placeholder="Password" id="idPassw" value="<?php echo $varPassw ?>" maxlength="20" size= "30">
                   </td>
                    </tr>
                       <tr>
                 <td align="center" colspan="2">
            <input type="password"  placeholder="Confirma Password" id="idConfPassw" value="" maxlength="20" size= "30">
                   </td>
                    </tr>
                     <tr>
                  <td align="center" colspan="2">
                <input type="number" name="TELEFONO" placeholder="Teléfono" id="idTelefono" value="<?php echo $vartelefono ?>" maxlength="11" size= "13"> 
                         </td>
                    </tr>  
                       <tr>
                         <td align="center" colspan="2">
                              <input type="text" name="MATRICULA" placeholder="Matricula" id="idMatricula" value="<?php echo $varmatric ?>" maxlength="18" size= "20"> 
                         </td>
                    </tr> 
                       <td align="center" >
                          Foto
                         </td>
                        <td align="center" >
               <input type="file" name="fotoVehiculo" id="idfoto" required>
                         </td>
                    </tr> 
                    <tr>
                         <td align="center" colspan="2">
                          <br>
                              <input type="button" name="boton" onclick="regProfe()" value= "Registrar">
                         </td>
                    </tr>
                    
          	</table>
          </td>
		</tr>
	</TABLE>
</form>
</body>
</html>