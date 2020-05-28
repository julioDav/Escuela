<?php
 $CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_GET['id'])){
 

        $VArid=  $_GET['id'];    
        $varnom= $_GET['NOMBRE'];
         $varturno =$_GET['TURNO'];
         $varcorreo= $_GET['CORREO'];
        $varpassword= md5($_GET['PASSWORD']);
        
        $vartelefono=$_GET['TELEFONO'];
        $varMatr=$_GET['MATRICULA'];
      
    $varnomMay = strtoupper(utf8_decode($varnom));

        $SQL= " UPDATE profesores 
               SET NOMBRE= '$varnomMay',
                TURNO = '$varturno',
                TELEFONO= '$vartelefono',
                PASSWORD= '$varpassword',
                EMAIL= '$varcorreo',
                MATRICULA= '$varMatr'
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
  
