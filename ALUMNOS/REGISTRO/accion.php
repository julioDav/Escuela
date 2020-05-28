<?php
$CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_POST['NOMBRE'])){
$varnom = $_POST['NOMBRE'] ;
$varcorreo  = $_POST['CORREO'];
$varpassword = md5($_POST['textPASSWORD']);
$vargrado = $_POST['GRADO'];
$vargrupo = $_POST['GRUPO'];
$varTurno= $_POST['TURNO'];
$vartelefono = $_POST['TELEFONO'];
$vardireccion = $_POST['DIRECCION'];
  $imgData = addslashes(file_get_contents($_FILES['fotoVehiculo']['tmp_name']));
if($CONEXION -> connect_errno){echo("Conexion fallida: ". $CONEXION -> connect_error);
exit();
}
$varnomMay = strtoupper(utf8_decode($varnom));
$SQL = "INSERT INTO alumnos (NOMBRE,EMAIL,PASSWORD,GRADO,GRUPO,TELEFONO,DIRECCION,TURNO,FOTO)
 VALUES ('$varnomMay','$varcorreo','$varpassword','$vargrado','$vargrupo','$vartelefono','$vardireccion', '$varTurno','$imgData')" ;
if($CONEXION -> query($SQL) === TRUE){
echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
 ?>  
        <script type="text/javascript">
        	self.location = "../../INGRESAR/InSecionAlum.php";
        </script>
      <?php
}


}else{
$varnom= "";
$varusuario= "";
$varcorreo= "";
$varpassword= "";
$vargrado= "";
$varTurno ="";
$vargrupo= "";
$vartelefono= "";
$vardireccion= "";
}

?>