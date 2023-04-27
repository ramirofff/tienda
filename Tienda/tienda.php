<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://img.icons8.com/ios-glyphs/480/clothes.png" type="image/ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilos.css">

    <title> Tienda Online UNO </title>
</head>

<body>
    <div class="container">
        <?php
            include "sesion.php";
        ?>
        <header>
            <ul class="header-section nav nav-pills">
                <?php echo '<h4 class="nav-link me-auto">Usted se ha identificado como: '.$user.'<h4>' ?>
                <li><a href="tienda.php" class="nav-link active"><i class="bi bi-house-door-fill"></i> Página Principal</a></li>
                <li><a href="pedidos.php" class="nav-link"><i class="bi bi-bag-check-fill"></i> Mis pedidos</a></li>
                <li><a href="cerrarSesion.php" class="nav-link"><i class="bi bi-door-open-fill"></i> Cerrar Sesión</a></li>
            </ul>
            <hr/>
            <h1>Tienda Online UNO</h1>
            <h2>Ropa de moda</h2>
        </header>
        <br/><br/>
        <nav>
            <p class="bg-info">Menú</p>
            <br/>
            <div class="menu">
                <a href="remera.php" class="btn btn-success btn-lg">Remeras</a>
                <a href="pantalon.php" class="btn btn-primary btn-lg">Pantalones</a>
                <a href="abrigo.php" class="btn btn-warning btn-lg">Abrigos</a>
                <a href="calzado.php" class="btn btn-danger btn-lg">Calzado</a>
            </div>
        </nav>
        <br/><br/>
        <section>
            <p>Descubrí las ultimas tendencias de moda en la tienda online UNO!</p>
            <br/>
            <img alt="imagen" src="https://imagizer.imageshack.com/img924/3065/JWVkeW.png" class="card-img-top">
            <br/><br/>
            <p class="bg-primary">Principales Categorias</p>
            <br/>
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="imagen" src="https://imagizer.imageshack.com/img922/6859/8Znc0e.png" class="card-img-top"/>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Remeras</h1>
                            <p>Las mejores remeras</p>
                            <p><a class="btn btn-lg btn-success" href="remera.php">Entrar</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="imagen" src="https://imagizer.imageshack.com/img922/4761/ePmBE1.png" class="card-img-top"/>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Pantalones</h1>
                            <p>Los mejores pantalones</p>
                            <p><a class="btn btn-lg btn-info" href="pantalon.php">Entrar</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="imagen" src="https://imagizer.imageshack.com/img924/2873/Wkf1Zy.png" class="card-img-top"/>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Abrigos</h1>
                            <p>Los mejores abrigos</p>
                            <p><a class="btn btn-lg btn-warning" href="abrigo.php">Entrar</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img alt="imagen" src="https://imagizer.imageshack.com/img924/3058/0N1JO3.png" class="card-img-top"/>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Calzado</h1>
                            <p>El mejor calzado</p>
                            <p><a class="btn btn-lg btn-danger" href="calzado.php">Entrar</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <br/><br/> 
        <footer>
            <hr/>
            <div class="footerFlex">
                <div>
                    Contacto:<br/>
                    <i class="bi bi-person-circle"></i> Gomez, Lorena Edith<br/>
                    <i class="bi bi-telephone-fill"></i> 1168017247<br/>
                    <i class="bi bi-envelope-fill"></i><a href="mailto:loreedithgomez@gmail.com"> Correo</a>
                </div>
                <div>
                    Ayuda:<br/>
                    <a href="arrepentimiento.html"> Boton de arrepentimiento</a><br/>
                    <a href="politicas.html"> Politicas de privacidad</a>
                </div>
                <div>
                    Nosotros:<br/>
                    <a href="newsletter.html"> Suscribirse a Newsletter</a><br/>
                    <a href="nosotros.html"> Sobre Nosotros</a>
                </div>
            </div>
            <br/>
            <strong>Derechos Reservados &copy; 2023</strong>
        </footer>
    </div>
</body>
</html>