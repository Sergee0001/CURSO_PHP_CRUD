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
    
    echo "<table width='50%' align='center'border='1'><tr><td>";
    echo $fila['CODIGO_CLIENTE'] . "</td><td> ";
    echo $fila['EMPRESA'] . "</td><td> ";
    echo $fila['DIRECCION'] . "</td><td> ";
    echo $fila['POBLACION'] . "</td><td> ";
    echo $fila['TELEFONO'] . "</td><td> ";
    echo $fila['RESPONSABLE'] . "</td></td></tr></table> ";

    echo "<br>";
    #ECHO "ESTO ES UN COMENTARIO ";
    }
    mysqli_close($coneccion); 

    while($fila = mysqli_fetch_row($rs)){

    for ($i=0; $i <count($fila); $i++){ 
        
        echo $fila[$i] . " " ;
        #echo "<br>";
    }
        echo "<br>";
    }

    while($fila = mysqli_fetch_row($rs)){ 
    foreach($fila as $valor) 
    echo $valor . " "; 
    echo "<br>"; }
?>  
</body>
</html>