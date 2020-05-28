<?php
 $CONEXION = new mysqli ("localhost","root","","escuela");
if(isset($_GET['id'])){
 
        $VArid=  $_GET['id'];    
        $varmateria= $_GET['MATERIA'];
         $varturno =$_GET['TURNO'];
        $varprofe= $_GET['PROFESOR'];
        $varSalon= $_GET['SALON'];

      
    $varMateMay = strtoupper(utf8_decode($varmateria));
 $varProfMay = strtoupper(utf8_decode($varprofe));
        $SQL= " UPDATE materias 
               SET MATERIA= '$varMateMay',
                TURNO= '$varturno',
                PROFESOR= '$varProfMay',
                SALON = '$varSalon'
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
  
