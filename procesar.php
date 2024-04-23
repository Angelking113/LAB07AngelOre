<?php
session_start();

function validar_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = validar_input($_POST['nombre']);
    $agente_id = validar_input($_POST['agente_id']);
    $departamento_id = validar_input($_POST['departamento_id']);
    $num_misiones = validar_input($_POST['num_misiones']);
    $descripcion_mision = validar_input($_POST['descripcion_mision']);


    $_SESSION['agente'] = array(
        'nombre' => $nombre,
        'agente_id' => $agente_id,
        'departamento_id' => $departamento_id,
        'num_misiones' => $num_misiones,
        'descripcion_mision' => $descripcion_mision
    );

    header("Location: confirmacion.php");
    exit();
}
?>
