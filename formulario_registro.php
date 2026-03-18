<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Registro de Articulos</h1> 
<form name="form1" method="get" action ="insertar_registroS.php">
    <table border="0" align="center">
    <tr>
        <td>Codigo Cliente</td>
        <td><label for ="c_cliente"></label>
        <input type ="text" name="c_cliente" id="c_cliente"></td>
    </tr>
    <tr>
        <td>Empresa</td>
        <td><label for="empresa"></label>
        <input type ="text"name="empresa" id="empresa"></td>
    </tr>
     <tr>
        <td>Direccion</td>
        <td><label for ="direccion"></label>
        <input type ="text" name="direccion" id="direccion"></td>
    </tr>
    <tr>
        <td>Poblacion</td>
        <td><label for ="poblacion"></label>
        <input type ="text" name="poblacion" id="poblacion"></td>
    </tr>
    <tr>
        <td>Telefono</td>
        <td><label for ="telefono"></label>
        <input type ="text" name="telefono" id="telefono"></td>
    </tr>
     <tr>
        <td>Responsable</td>
        <td><label for ="responsable"></label>
        <input type ="text" name="responsable" id="responsable"></td>
    </tr>
    <tr>
        <td>
        <input type ="submit" name ="enviando" value ="INSERTAR!">
    </td>
    </tr>
    </form>
</body>
</html>