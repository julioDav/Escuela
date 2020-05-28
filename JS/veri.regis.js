     function validarreG() {   
       if (document.getElementById('idnombre').value=="") {
          document.getElementById('idnombre').focus();
          alert("Ingresar un Nombre");
          return;
       } 
       if (document.getElementById('idGRADO').value=="") {
          document.getElementById('idGRADO').focus();
          alert("Ingresar un Grado");
          return;
       }  
        if (document.getElementById('IdGrupo').value=="") {
          document.getElementById('IdGrupo').focus();
          alert("Ingresar un Grupo");
          return;
       } 

       if (document.getElementById('idTURNO').value=="") {
          alert("Seleccionar un Turno");
          return;
       }  
     
       if (document.getElementById('IDPassword').value=="") {
          document.getElementById('IDPassword').focus();
          alert("Ingresar una Contraseña");
          return;
       } 
       if (document.getElementById('IDPassword2').value=="") {
          document.getElementById('IDPassword2').focus();
          alert("Confirma tu contraseña");
          return;
       }
         if (document.getElementById('idDireccon').value=="") {
          document.getElementById('idDireccon').focus();
          alert("Ingresar una Dirección");
          return;
       }  

       if (document.getElementById('idCorreo').value=="") {
          document.getElementById('idCorreo').focus();
          alert("Ingresar un Correo ");
          return;
       }  
       if (document.getElementById('idTelefono').value=="") {
          document.getElementById('idTelefono').focus();
          alert("Ingresar un Teléfono");
          return;
       }   
         if (document.getElementById('idTelefono').value.length != 10) {
          document.getElementById('idTelefono').focus();
          alert("Ingresar un Teléfono valido");
          return;
       } 
        if (document.getElementById('idfoto').value=="") {
          alert("Ingresar una foto");
          return;
       }  
  
          if( document.getElementById('IDPassword').value!= document.getElementById('IDPassword2').value){
       alert("ERROR en la confirmacion de contraseña");
       return;
   }
       document.getElementById('formuId').submit();
     }

    function validarNueMate() {   
       if (document.getElementById('idmateria').value=="") {
          document.getElementById('idmateria').focus();
          alert("Ingresar una Materia");
          return;
       } 
       if (document.getElementById('idTURNO').value=="") {
          alert("Selecciona un Turno");
          return;
       }  
        if (document.getElementById('idPROFE').value=="") {
          document.getElementById('idPROFE').focus();
          alert("Ingresar el nombre del Profesor");
          return;
       } 
      if (document.getElementById('IdSalon').value=="") {
          document.getElementById('IdSalon').focus();
          alert("Ingresar un Salon");
          return;
       } 
     
       document.getElementById('EnvMateria').submit();
     }
    function regProfe() {   
       if (document.getElementById('idnombre').value=="") {
          document.getElementById('idnombre').focus();
          alert("Ingresar un Nombre");
          return;
       } 
     if (document.getElementById('idTURNO').value=="") {
          alert("Seleccionar un Turno");
          return;
       } 
        if (document.getElementById('idCorreo').value=="") {
          document.getElementById('idCorreo').focus();
          alert("Ingresar un Email");
          return;
       } 
      if (document.getElementById('idPassw').value=="") {
          document.getElementById('idPassw').focus();
          alert("Ingresar una Contraseña");
          return;
       } 
        if (document.getElementById('idConfPassw').value=="") {
          document.getElementById('idConfPassw').focus();
          alert("Confirma tu Contraseña");
          return;
       } 
         if (document.getElementById('idTelefono').value=="") {
          document.getElementById('idTelefono').focus();
          alert("Ingresar un Teléfono");
          return;
       } 

        if (document.getElementById('idTelefono').value.length!= 10) {
          document.getElementById('idTelefono').focus();
          alert("Ingresar un Teléfono valido");
          return;
       } 
         if (document.getElementById('idMatricula').value=="") {
          document.getElementById('idMatricula').focus();
          alert("Ingresar una Matricula");
          return;
       } 
           if (document.getElementById('idfoto').value=="") {
          alert("Ingresar una foto");
          return;
       }  
       if( document.getElementById('idPassw').value!= document.getElementById('idConfPassw').value){
       alert("ERROR en la confirmacion de contraseña");
       return;
   }
     
       document.getElementById('formuProfe').submit();
     }

  function enviar(){
    document.getElementById("Formulario").submit();
  }
  function Actu(){
    document.getElementById("EnvAct").submit();
  }
   function ConsulMate(){
    document.getElementById("ConsMater").submit();
  }

 
