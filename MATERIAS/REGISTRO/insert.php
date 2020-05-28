<?php
session_start();
$varmate = "";
$varTurno ="";
$varprofe = "";
$varsalon = "";
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
        <div style="width: 50px;">
          <ul>
            <li ><a class="titulo naranja" >Materias</a></li>
            <li class="titulo rojo"><a href="../Consulta.php">Consulta</a></li>
          </ul>
         
        </div>
        </li>
        <li><a>Contacto</a></li>
             <li><a href="../../PROFESORES/Consulta.php"> <?php echo $_SESSION['NombreUsuario']; ?></a>
             <div style="width: 150px;">
          <ul>
            <li class="titulo rojo"><a href="../../INGRESAR/cerrar.php">Cerrar Sesión</a></li>
          </ul> 
          </div></li>
      </ul>
    </nav>
  <br>
     <form  action ="accion.php"  id="EnvMateria">

	<TABLE width="40%" align="center" style="background-color: #95F5B6; border: #D8FD4E 8px inset;" >
    <tr>
      <td align="center">
        <h2> Registro de nueva Materia</h2>
      </td>
    </tr>
    
		<tr>
          <td align="center"  >
          	<table width="50%" style="background-color: #95F5B6;">
          		<tr>
          			<td align="center" colspan="2">
          				<input type="text" placeholder="Materia" name="MATERIA" id= "idmateria" value="<?php echo $varmate ?>" maxlength="30" size="25">
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
          		<input type="text" Id="idPROFE" placeholder="Profesor" name="PROFE" maxlength="50" value="<?php echo $varprofe ?>" size="30">
          			</td>
          		</tr>
          		<tr>
          			<td align="center" colspan="2">
                   <input type="text" Id="IdSalon" placeholder="Salon" maxlength="10" name="SALON" value="<?php echo $varsalon ?>" size="7">
          			</td>
          		</tr>
            
                    <tr>
                         <td align="center">
                          <br>
                              <input type="button" name="boton" onclick="validarNueMate()" value= "Subir">
                         </td>
                    </tr>
                    
          	</table>
          </td>
		</tr>
	</TABLE>
</form>
</body>
</html>