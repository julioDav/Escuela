<?php
$varnom = "";
$vargrado = "";
$vargrupo = "";
$varTurno ="";
$varpassword = "";
$VArRETYPEPASSWORD = "";
$varcorreo = "";
$vartelefono = "";
$vardireccion = "";
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
     <form  action ="accion.php"  id="formuId"  enctype="multipart/form-data" method="post">

	<TABLE width="40%" align="center" style="background-color: #95F5B6; border: #D8FD4E 8px inset;" >
    <tr>
      <td align="center">
        <h2> Registro de nuevo alumno</h2>
      </td>
    </tr>
    
		<tr>
          <td align="center"  >
          	<table width="50%" style="background-color: #95F5B6;">
          		<tr>
          			<td align="center" colspan="2">
          				<input type="text" placeholder="Nombre" name="NOMBRE" id= "idnombre" value="<?php echo $varnom ?>" maxlength="100" size="35" required>
          			</td>
          		</tr>
          		<tr>
          			<td align="center" colspan="2">
          				<input type="number" Id="idGRADO" placeholder="Grado" name="GRADO" maxlength="1" value="<?php echo $vargrado ?>" size="8" required>
          			</td>
          		</tr>
          		<tr>
          			<td align="center" colspan="2">
                <input type="text" Id="IdGrupo" placeholder="Grupo" maxlength="4" name="GRUPO" value="<?php echo $vargrupo ?>" size="4" required>
          			</td>
          		</tr>
              <tr>    
    
            <td align="center" colspan="2">
              <select name="TURNO" id="idTURNO" required style="background-color: #95F5B6;">
                <option value="">Turno</option>
                <option value="Ves">Ves</option>
                <option value="Mat">Mat</option>
              </select>
            </td>
    </tr>
                         <tr>
                         <td align="center" colspan="2">
                              <input type="PASSWORD" id="IDPassword" placeholder="Contraseña" maxlength="20" name="textPASSWORD" value="<?php echo $varpassword ?>" size="18" required>
                         </td>
                    </tr>
                      <tr>
                         <td align="center" colspan="2">
                             <input type="PASSWORD" placeholder="Confirma contraseña" id="IDPassword2" maxlength="20" name="RETYPEPASSWORD" value="<?php echo $varpassword ?>" size="18" required>
                         </td>
                    </tr>
                      <tr>
                         <td align="center" colspan="2">
                              <input type="text" placeholder="Dirección" name="DIRECCION" id="idDireccon" value="<?php echo $vardireccion ?>" maxlength="100" size= "30" required>
                         </td>
                    </tr>
                       <tr>
                         <td align="center" colspan="2"> 
            <input type="email" name="CORREO" placeholder="Correo" id="idCorreo" value="<?php echo $varcorreo ?>" maxlength="100" size= "30" required>
                         </td>
                    </tr>
                     <tr>
                         <td align="center" colspan="2">
                  <input type="number" name="TELEFONO" placeholder="Teléfono" id="idTelefono" value="<?php echo $vartelefono ?>" maxlength="10" size= "13" required> 
                         </td>
                    </tr>  
                   <tr>
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
                              <input type="button" name="boton"  onclick="validarreG()" value= "Registrar">
                         </td>
                    </tr>
                    
          	</table>
          </td>
		</tr>
	</TABLE>
</form>
</body>
</html>