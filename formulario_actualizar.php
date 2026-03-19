<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $busqueda=$_GET["buscar"];

    require("datos_coneccion.php");
    
    $coneccion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

    if(mysqli_connect_errno()){
        echo "FALLO AL CONECTAR LA BASE DE DATOS";
        exit();
     }
    $consulta="SELECT * FROM CLIENTES WHERE RESPONSABLE LIKE '%$busqueda%'";

    $rs=mysqli_query($coneccion,$consulta);

    
    while($fila=mysqli_fetch_array($rs , MYSQLI_ASSOC)){
    
   # echo "<table width='50%' align='center'border='1'><tr><td>";
    echo "<form action ='actualizar_registro.php' method='get'>";
    echo "<input type='text' name='c_cliente' value ='" .$fila['CODIGO_CLIENTE'] ."'></br>";
    echo "<input type='text' name='empresa' value ='" .$fila['EMPRESA'] ."'></br>";
    echo "<input type='text' name='direccion' value ='" . $fila['DIRECCION'] ."'></br>";
    echo "<input type='text' name='poblacion' value ='" .$fila['POBLACION'] ."'></br>";
    echo "<input type='text' name='telefono' value ='" .$fila['TELEFONO'] ."'></br>";
    echo "<input type='text' name='responsable' value ='" .$fila['RESPONSABLE'] ."'></br>";
    echo "<input type='submit' name='enviado' value='ACTUALIZAR!'>";
    echo "</form>";
    #ECHO "ESTO ES UN COMENTARIO ";
    }
?>  
</body>
</html>