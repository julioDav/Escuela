<?php
 $CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_GET['id'])){
 

        $VArid=  $_GET['id'];    
        $varnom= $_GET['NOMBRE'];
        $vargrado= $_GET['GRADO'];
        $vargrupo= $_GET['GRUPO'];
         $varturno =$_GET['TURNO'];
        $varpassword= md5($_GET['PASSWORD']);
        $varcorreo= $_GET['CORREO'];
        $vartelefono=$_GET['TELEFONO'];
        $vardireccion=$_GET['DIRECCION'];
       
    $varnomMay = strtoupper(utf8_decode($varnom));

        $SQL= " UPDATE alumnos 
               SET NOMBRE= '$varnomMay',
                GRADO= '$vargrado',
                GRUPO= '$vargrupo',
                TURNO = '$varturno',
                TELEFONO= '$vartelefono',
                PASSWORD= '$varpassword',
                DIRECCION= '$vardireccion',
                EMAIL= '$varcorreo'
               WHERE ID= $VArid " ;
              
          if($CONEXION->query($SQL)){
         echo "<script type='text/javascript'>alert('Modificacion exitosa');</script>";

           ?>  
        <script type="text/javascript">
          self.location = "../Consulta.php";
        </script>
      <?php
          }
         
}

           
 ?>
  
