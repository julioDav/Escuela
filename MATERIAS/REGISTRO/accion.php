<?php
$CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_GET['MATERIA'])){
$varmate = $_GET['MATERIA'];
$varTurno= $_GET['TURNO'];
$varprofe = $_GET['PROFE'];
$varsalon = $_GET['SALON'];
if($CONEXION -> connect_errno){echo("Conexion fallida: ". $CONEXION -> connect_error);
exit();
}
$varmateMay = strtoupper(utf8_decode($varmate));
$varprofeMay = strtoupper(utf8_decode($varprofe));
$SQL = "INSERT INTO materias (MATERIA,TURNO,PROFESOR,SALON)
 VALUES ('$varmateMay','$varTurno','$varprofeMay','$varsalon')" ;
if($CONEXION -> query($SQL) === TRUE){
echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
 ?>  
        <script type="text/javascript">
        	self.location = "../consulta.php";
        </script>
      <?php
}

}else{
$varmate = "";
$varTurno ="";
$varprofe = "";
$varsalon = "";
}

?>