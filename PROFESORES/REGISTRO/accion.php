<?php
$CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_POST['NOMBRE'])){
$varnom = $_POST['NOMBRE'];
$varcorreo  = $_POST['CORREO'];
$varTurno= $_POST['TURNO'];
$vartelefono = $_POST['TELEFONO'];
$varmatric= $_POST['MATRICULA'];
$varPassw= md5($_POST['PASSW']);
  $imgData = addslashes(file_get_contents($_FILES['fotoVehiculo']['tmp_name']));
if($CONEXION -> connect_errno){echo("Conexion fallida: ". $CONEXION -> connect_error);
exit();
}
$varnomMay = strtoupper(utf8_decode($varnom));
$SQL = "INSERT INTO profesores (NOMBRE,TURNO,EMAIL,TELEFONO,MATRICULA,PASSWORD,FOTO)
 VALUES ('$varnomMay','$varTurno','$varcorreo','$vartelefono','$varmatric', '$varPassw','$imgData')" ;
if($CONEXION -> query($SQL) === TRUE){
echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
 ?>  
        <script type="text/javascript">
        	self.location = "../../INGRESAR/InSecionProfe.php";
        </script>
      <?php
}

}else{
	$varnom = "";
$varcorreo  = "";
$varTurno= "";
$vartelefono = "";
$varmatric= "";
$varPassw= "";
  $imgData = "";
}
?>