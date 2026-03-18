<?php 
    $codigo_cliente=$_GET["c_cliente"];
    $empresa=$_GET["empresa"];
    $direccion=$_GET["direccion"];
    $poblacion=$_GET["poblacion"];
    $telefono=$_GET["telefono"];
    $responsable=$_GET["responsable"];
    require("datos_coneccion.php");

    $coneccion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

    if(mysqli_connect_errno()){
        echo "FALLO AL CONECTAR LA BASE DE DATOS";
        exit();
     }
    $consulta="INSERT INTO CLIENTES (CODIGO_CLIENTE,EMPRESA,DIRECCION,POBLACION,TELEFONO,RESPONSABLE)
  
     VALUES ('$codigo_cliente','$empresa','$direccion','$poblacion','$telefono','$responsable') ";

    $rs=mysqli_query($coneccion,$consulta);

    if($rs==false){
        echo "ERROR AL INSERTR";
    }else{
        echo "registro guardado";

    }

?>