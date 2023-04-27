//Template header
document.getElementById('header').innerHTML = 
    `<div class="header-section">
        <img class="logo" src="https://cdn-icons-png.flaticon.com/512/3718/3718330.png" alt=""/>
        <ul class="nav nav-pills">
            <li><a href="tienda.php" class="nav-link"><i class="bi bi-house-door-fill"></i> Página Principal</a></li>
            <li><a href="pedidos.php" class="nav-link"><i class="bi bi-bag-check-fill"></i> Mis pedidos</a></li>
            <li><a href="cerrarSesion.php" class="nav-link"><i class="bi bi-door-open-fill"></i> Cerrar Sesión</a></li>
        </ul>
    </div>
    <hr/>`;

//Template nav
document.getElementById('nav').innerHTML = 
    `<p class="bg-info">Menú</p>
    <br/>
    <div class="menu">
        <a href="remera.php" class="btn btn-success btn-lg">Remeras</a>
        <a href="pantalon.php" class="btn btn-primary btn-lg">Pantalones</a>
        <a href="abrigo.php" class="btn btn-warning btn-lg">Abrigos</a>
        <a href="calzado.php" class="btn btn-danger btn-lg">Calzado</a>
    </div>`;

    //Template footer
    document.getElementById('footer').innerHTML = `
    <hr />
    <div class="footerFlex">
      <div>
        Contacto:<br/>
        <i class="bi bi-person-circle"></i> Gomez, Lorena Edith<br/>
        <i class="bi bi-telephone-fill"></i> 1168017247<br/>
        <i class="bi bi-envelope-fill"></i><a href="mailto:loreedithgomez@gmail.com"> Correo</a>
      </div>
      <div>
        Ayuda:<br/>
        <<a href="arrepentimiento.html"> Politicas de privacidad</a>
        <a href="politicas.html"> Politicas de privacidad</a>
      </div>
      <div>
        Nosotros:<br/>
        <a href="newsletter.html.html"> newsletter.html</a><br/>
        <a href="nosotros.html"> Sobre Nosotros</a>
      </div>
    </div>
    <br/>
    <strong>Derechos Reservados &copy; 2023</strong>`;
  
  // Redireccionamiento a arrepentimiento.php
  
  