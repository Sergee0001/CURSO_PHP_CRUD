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
     mysqli_select_db($coneccion,$db_nombre) or die ("no se encuentra la BBDD");
    $consulta="DELETE FROM CLIENTES WHERE CODIGO_CLIENTE='$codigo_cliente'";

    $rs=mysqli_query($coneccion,$consulta);

    if($rs==false){
        echo "ERROR AL ELIMINAR";
    }else{
        echo "registro ELIMINADO";


    }

?>