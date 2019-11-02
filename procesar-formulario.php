<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formularios</title>
</head>
<body>
<?php
include_once "funciones-generales.php";
if(isset($_REQUEST["txtEmail"])&& $_REQUEST["txtEmail"] !="" && isset($_REQUEST["txtName"]) && $_REQUEST["txtName"] !=""){
    echo "Email: " .$_POST["txtEmail"]. "<br>";
    echo "Nombre: " .$_POST["txtName"]. "<br>";
    echo "Asunto: " .$_POST["txtSubject"]. "<br>";
    echo "Mensaje: " .$_POST["txtMessage"]. "<br>";
    errorLog("Nombre: ".$_REQUEST["txtName"]. "Email: ".$_REQUEST["txtEmail"]);    
}else{
    echo "Complete los campos obligatorios";
}


?>        
</body>
</html>