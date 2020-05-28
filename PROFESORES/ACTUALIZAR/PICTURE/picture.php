<?php
session_start();
if (isset($_GET['id'])) {
   $mysqli = new mysqli ("localhost","root","","escuela");
     $SQL = "SELECT * FROM profesores WHERE ID = '".$_GET['id']."'";      

     $datos = $mysqli->query($SQL);
     $registros = $datos->fetch_assoc();
   $VarID = $registros["ID"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../../CSS/inicio.css">
</head>
<body>
	  <nav>
      <ul>
        <li><a>Inicio</a></li>
        <li>
        <a >Examinar</a>
        <div style="width: 50px;">
          <ul>
            <li ><a class="titulo naranja" >Materias</a></li>
            <li class="titulo rojo"><a href="../../../MATERIAS/consulta.php">Consulta</a></li>
          </ul>
        </div>
        </li>
        <li><a href="">Contacto</a></li>
          <li><a href="../../Consulta.php"> <?php echo $_SESSION['NombreUsuario']; ?></a>
          <div style="width: 150px;" >
          <ul>
            <li class="titulo rojo"><a href="../../../INGRESAR/cerrar.php">Cerrar Sesión</a></li>
          </ul> 
          </div></li>
      </ul>
    </nav>
    <br>
<form method="post"  action ="Subimagen.php" enctype="multipart/form-data">
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
                          <input type="hidden" name="id" value="<?php echo $VarID ?>">
                          Foto<br>
                          <input type="file" name="picture" id="picture">
                      </td>
                    </tr>
                    <tr><td align="center"><button name="submit">Subir</button> </td></tr>       
            </table>
          </td>
    </tr>
  </TABLE>
</form>
</body>
</html>
<?php
}
?>