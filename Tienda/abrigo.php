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
  <link rel="stylesheet" href="estilos/abrigo.css">

  <title>Tienda Online UNO</title>
</head>
<body>
  <div id="app">
    <header id="header"></header>
    <h1>{{titulo}}</h1>
    <br/>
    <h2>Ropa de moda</h2>
    <br/><br/>
    <nav id="nav"></nav>
    <br/><br/>
    <section>
      <p>Descubrí las ultimas tendencias de moda en la tienda online UNO!</p>
      <br/>
      <h3 class="bg-info">Abrigos</h3>
      <br/>
      <div class="container">
        <?php
        include "sesion.php";
        include "conexion.php";

        $query="SELECT * FROM productos WHERE tipo = 'abrigo' ORDER BY precio";
        $consulta=mysqli_query($conexion,$query);
        $cantidad=mysqli_num_rows($consulta);

        if($cantidad > 0){
		      while($obj=mysqli_fetch_object($consulta)){ ?>
            <div class="card border-warning">
              <div class="row">
                <div class="col-md-7">
                  <img src="<?php echo $obj->imagen?>" class="card-img-top" alt="..."/>
                </div>
                <div class="col-md-5">
                  <div class="card-body">
                    <h3><?php echo $obj->nombre?></h3>
                    <p>$ <?php echo $obj->precio?></p>
                    <span v-if="<?php echo $obj->cantidad?> > 1">Has comprado <?php echo $obj->cantidad?> abrigos</span>
                    <span v-if="<?php echo $obj->cantidad?> === 1">Has comprado 1 abrigo</span>
                    <span v-if="<?php echo $obj->cantidad?> === 0"><br/></span>
                    <br/>
                    <span v-if="<?php echo $obj->stock?> > 0">stock disponible: <?php echo $obj->stock?></span>
                    <span v-if="<?php echo $obj->stock?> === 0">Se ha agotado este abrigo</span>
                    <br/><br/>
                    <form action="añadirCarrito.php" method="post">
                      <input name="nombre" type="hidden" value="<?php echo $obj->nombre?>"/>
                      <button type="submit" class="btn btn-success" :disabled="<?php echo $obj->stock?> === 0">
                        <i class="bi bi-cart-plus"></i> Añadir al carrito
                      </button>
                    </form>
                    <br/>
                    <form action="sacarCarrito.php" method="post">
                      <input name="nombre" type="hidden" value="<?php echo $obj->nombre?>"/>
                      <button type="submit" class="btn btn-danger" :disabled="<?php echo $obj->cantidad?> === 0">
                        <i class="bi bi-cart-x"></i> Sacar del carrito
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <br/>
		      <?php }
        } ?>
      </div>
    </section>
    <br/><br/>
    <footer id="footer"></footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="header-nav-footer.js"></script>
  <script>
    const app = new Vue({
      el: '#app',
      data: {
        titulo: 'Tienda Online UNO',
      },
    });
  </script>
</body>
</html>