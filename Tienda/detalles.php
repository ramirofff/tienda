<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="https://img.icons8.com/ios-glyphs/480/clothes.png" type="image/ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Tienda Online UNO</title>
</head>
<body>

<?php
// Recibimos los datos de la URL y los decodificamos
if (isset($_GET['productos']) && isset($_GET['total'])) {
  $productos = json_decode(urldecode($_GET['productos']));
  $total = $_GET['total'];
} else {
  // Si no se recibieron los datos, redireccionamos a la página de inicio
  header('Location: index.php');
  exit();
}
?>

<!-- Mostramos los datos recibidos -->
<h1>Gracias por su compra</h1>

<p>Total: $<?php echo $total; ?></p>

<h2>Productos comprados:</h2>
<ul>
  <?php foreach ($productos as $producto): ?>
    <li><?php echo $producto->nombre; ?> - $<?php echo $producto->precio; ?> - <?php echo $producto->cantidad; ?> unidades</li>
  <?php endforeach; ?>
</ul>




</body>
</html>
