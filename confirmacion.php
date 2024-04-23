<?php
session_start();

if(isset($_SESSION['agente'])) {
    $agente = $_SESSION['agente'];

    unset($_SESSION['agente']);
} else {

    header("Location: formulario.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmación de ingreso de datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .datos-agente {
            margin-bottom: 20px;
        }
        .datos-agente label {
            font-weight: bold;
        }
        .datos-agente p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>confirmación de ingreso de datos</h2>
        <div class="datos-agente">
            <label>nombre:</label>
            <p><?php echo $agente['nombre']; ?></p>
            <label>ID de agente:</label>
            <p><?php echo $agente['agente_id']; ?></p>
            <label>ID del departamento:</label>
            <p><?php echo $agente['departamento_id']; ?></p>
            <label>número de misiones:</label>
            <p><?php echo $agente['num_misiones']; ?></p>
            <label>descripción de la nueva isión:</label>
            <p><?php echo $agente['descripcion_mision']; ?></p>
        </div>
        <p>los datos del agente se han ingresado con exito</p>
    </div>
</body>
</html>
