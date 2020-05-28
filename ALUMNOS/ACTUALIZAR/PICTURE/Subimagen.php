   <?php
   $db=new mysqli ("localhost","root","","escuela");
   if( isset($_POST["submit"]) &&  isset($_POST['id'])){
    $VarID = $_POST['id'];
   $revisar=getimagesize($_FILES["picture"]["tmp_name"]);
                if ($revisar !== false) {
                    $imagen = $_FILES['picture']['tmp_name'];
                    $imagenContenido = addslashes(file_get_contents($imagen));
                  
                   $SQL= " UPDATE alumnos SET FOTO= '$imagenContenido' WHERE ID= $VarID " ;
                    $resultado=$db->query($SQL);
                    if ($resultado) {
                      echo "<script type='text/javascript'> alert('Foto subida con exito'); </script>";
                            ?>  
        <script type="text/javascript">
          self.location = "../../Consulta.php";
        </script>
      <?php
                    }else{
                      echo "<script type='text/javascript'> alert('error'); </script>";                      
                    }
                }

}

            ?>
        

   

