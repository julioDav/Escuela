<?php
session_start();
 require ("../CONN/classConnectionMySQL.php");
 $Conexion = new ConnectionMySQL();
 $Conexion->CreateConnection();
 if ( isset($_GET['turn']) || isset($_GET['Nombre'])){
  $varTurn = $_GET['turn'];
   $VarNom = $_GET['Nombre'];
 }else{$varTurn ="";  $VarNom=""; }

 if(isset($_GET['id'])){
$VArid=  $_GET['id'];    

$CONEXION = new mysqli ("localhost","root","","escuela");
$SQl="DELETE  FROM profesores WHERE ID= $VArid";

if ($CONEXION-> query($SQl)) {
	echo "<script type='text/javascript'>alert('Registro eliminado');</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SECUNDARIA TEC #9</title>
<link rel="stylesheet" type="text/css" href="../CSS/inicio.css">
<link rel="stylesheet" type="text/css" href="../CSS/input.css">
<script type="text/javascript" src="../JS/veri.regis.js">  </script>
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
						<li class="titulo rojo"><a href="../MATERIAS/Consulta.php">Consulta</a></li>
					</ul>
				</div>
				</li>
				<li><a>Contacto</a></li>
				<li>
					<a style="color: yellow;"><?php echo $_SESSION['NombreUsuario']; ?></a>
				<div style="width: 150px;">
					<ul>
						<li class="titulo rojo"><a href="../INGRESAR/cerrar.php">Cerrar Sesión</a></li>
					</ul>	
					</div>
				</li>
			</ul>
		</nav>
		<br>
<form name="Fomulario" id="ConsMater" action="Consulta.php" method="get">	
	<table width="70%" align="center">
		<tr>
			<td align="center" colspan="2">
			<h1 style="color: white;">Profesores</h1>	
			</td>
		</tr>
		<tr>
			<td align="left" >
	<input type="button" value="Añadir nuevo Profesor" onclick="Registro()" class="botton" style="background-color: #f6a072;">
			</td>
	<td align="right" >		
		Nombre
		 <input type="text" name="Nombre" style="height: 20px; width: 200px;" value="<?php echo $VarNom ?>" >
	Turno
	<select name="turn" id="turn" style="background-color: #AEF9E4;" >
     <option value="">N/A</option>
	<?php
	  $SQL = "SELECT distinct(TURNO) FROM profesores ORDER BY TURNO "; 
	  $result = $Conexion->ExecuteQuery($SQL);
	  while($row = $Conexion->GetRows($result))
	       {

             if ($varTurn == $row['TURNO']){
             	echo "<option value='".$row['TURNO']."' selected>".$row['TURNO']."</option>";
             }else{
  	               echo "<option value='".$row['TURNO']."'>".$row['TURNO']."</option>";
	               }
	       }
	?>
	</select>	
	 <button value="Consultar" onclick="ConsulMate()" >Consultar</button>
      </td>
      </tr>
   </table>
</form>



	<table width="90%" align="center" style="background-color: #95F5B6; border: #D8FD4E 8px inset;">
		<tr>
			<td align="center">
				<table width="100%" border="1" style="background-color: #95F5B6;">
	  <tr>
	    <th width="1">Id</th> 	
		<th width="300">Nombre</th>
		<th width="1">Turno</th>
		<th width="200">Email</th>
        <th width="180">Teléfono</th>
        <th >Matricula</th>
        <th width="1">Foto</th>
		<th width="150">Acciones</th>
      </tr>
      <?php
  
         if (($varTurn == "") && ($VarNom=="")) {
      	$SQL = "SELECT * FROM profesores ORDER BY ID "; 
      }elseif ($VarNom == "") {
      	 $SQL = "SELECT * FROM profesores WHERE  TURNO = '".$varTurn."' " ; 
      }elseif ($varTurn == "") {
     $SQL = "SELECT * FROM profesores WHERE  NOMBRE LIKE '%".$VarNom."%' " ;
      }else{
       $SQL = "SELECT * FROM profesores WHERE ((TURNO = '".$varTurn."') AND ( NOMBRE LIKE '%".$VarNom."%')) " ; 
      }
   

	  $result = $Conexion->ExecuteQuery($SQL);
	  while($row = $Conexion->GetRows($result)) {
      ?>     	
	      <tr>
	        <td align="center" > <?php echo $row['ID'];?> </td>
			<td align="center" > <?php echo $row['NOMBRE'];?> </td>
			<td align="center"> <?php echo $row['TURNO'];?> </td>
			<td align="center"> <?php echo $row['EMAIL'];?></td>  
			<td align="center"> <?php echo $row['TELEFONO'];?></td>  
				<td align="center"> <?php echo $row['MATRICULA'];?></td> 
			<td align="center"> <img width="70" src="data:image/jpg;base64,<?php echo base64_encode($row['FOTO']); ?>"></td>  
			<td align="center">
				<table>
					<tr> 
			<form id= "EnvAct" action="ACTUALIZAR/update.php"> 
					<input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
				<button class="botton" onclick="Actu()">Actualizar </button>
			</form>
			<form id="EnvElim" action="Consulta.php" >
				<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
				  <button class="botton" >Eliminar </button>  
			</form>
			</tr>
		</table>
			</td>    	
	      </tr>
	      <?php	
	      }
	      ?>
	      </table>
	      </td>
	      </tr>
	</table>
</body>
</html>
<script type="text/javascript">
    function Registro() {
       
   window.open("REGISTRO/NUEVO/insert.php", "_self");
    }

    </script>