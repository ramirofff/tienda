<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
	<?php 
	// Conexión a la base de datos
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "newsletter";

	$conn = new mysqli($host, $user, $password, $database);
	if ($conn->connect_error) {
	    die("La conexión falló: " . $conn->connect_error);
	}

	// Recibiendo datos del formulario
	$email = $_POST['email'];


	// Verificar si el correo ya existe en la base de datos
	$stmt = $conn->prepare("SELECT id FROM subscriber WHERE email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	    echo "<div class='message'>Ya estás suscrito al newsletter</div>";
	    header("Refresh: 5; url=tienda.php");
	    echo "<p>Serás redirigido a la página principal en 5 segundos.</p>";
	} else {
	        // Insertar correo en la base de datos
    $stmt = $conn->prepare("INSERT INTO subscriber (email) VALUES (?)");
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        echo "Te has suscrito exitosamente al newsletter";
        header("Refresh: 5; url=tienda.php");
        echo "<p>Serás redirigido a la página principal en 5 segundos.</p>";
    } else {
        echo "Ocurrió un error al suscribirte al newsletter";
        header("Refresh: 5; url=tienda.php");
    echo "<p>Serás redirigido a la página principal en 5 segundos.</p>";
    }
}

// Cerrar conexión a la base de datos
$stmt->close();
$conn->close();
?>
