<?php
    $cod_cliente=$_GET["c_cliente"];
    $empresa=$_GET["empresa"];
    $direccion=$_GET["direccion"];
    $poblacion=$_GET["poblacion"];
    $telefono=$_GET["telefono"];
    $responsable=$_GET["responsable"];
    require("datos_coneccion.php");
    $coneccion=mysqli_connect($db_host,$db_usuario,$db_contraseña);

    if(mysqli_connect_errno()){
        echo "FALLO AL CONECTAR LA BASE DE DATOS";
    exit();   
    }

    mysqli_select_db($coneccion,$db_nombre) or die ("no se encuentra la BBDD");

    $consulta="UPDATE CLIENTES SET EMPRESA='$empresa',DIRECCION='$direccion',POBLACION='$poblacion',TELEFONO='$telefono',RESPONSABLE='$responsable'
                WHERE CODIGO_CLIENTE='$cod_cliente'";

    $resultado=mysqli_query($coneccion,$consulta);

    if($resultado==false){
        echo "error de consulta";
    }else{
        echo "Registro Guardado<br></br>";
        echo "<table><tr><td>$cod_cliente</td></tr>";
        echo "<tr><td>$empresa</td></tr>";
        echo "<tr><td>$direccion</td></tr>";
        echo "<tr><td>$poblacion</td></tr>";
        echo "<tr><td>$telefono</td></tr>";
        echo "<tr><td>$responsable</td></tr></table>";    }


?>
