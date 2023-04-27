<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css"/>
  <link rel="icon" href="https://img.icons8.com/ios-glyphs/480/clothes.png" type="image/ico"/>
  <link rel="stylesheet" href="estilos/pago.css">

  <title>Tienda Online UNO</title>
</head>
<body>
  <?php
    include "sesion.php";
  ?>
  <div id="app">
    <form class="form-inline needs-validation" method="post" action="" v-on:submit="comprobarPago" autocomplete="on" novalidate>
        <h1>{{titulo}}</h1>
        <?php echo '<h2>El usuario '.$user.'<h2>';?>
        <?php echo '<h2>ha realizado una compra por: $'.$_SESSION['total_carrito'].'<h2>';?>
        <br/>
        <i class="bi bi-credit-card"></i>
        <label> Nombre en la tarjeta: </label>
        <br/>
        <input type="text" class="form-control form1" v-model="nombre" minlength="5" maxlength="50" placeholder="Ingrese nombre" required/>
        <small>Nombre completo como se muestra en la tarjeta</small>
        <br/><br/>
        <i class="bi bi-credit-card-2-front"></i>
        <label> Número de Tarjeta: </label>
        <br/>
        <input type="num" class="form-control form1" v-model="numero" minlength="16" maxlength="16" placeholder="1234 5678 9012 3456" pattern="{1,16}" required/>
        <small>Ingrese solamente numeros</small>
        <br/><br/>
      <i class="bi bi-calendar-date"></i>
      <label>Vencimiento: </label>
      <div>
        <select class="form-select form2" v-model="mes" required>
          <option value="" selected disabled>MM</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
        /
        <select class="form-select form2" v-model="año" required>
          <option value="" selected disabled>YYYY</option>
          <option value="1">2020</option>
          <option value="2">2021</option>
          <option value="3">2022</option>
          <option value="4">2023</option>
          <option value="5">2024</option>
          <option value="6">2025</option>
        </select>
      </div>
      <small>Ingrese el mes y el año en el que vence la tarjeta</small>
      <br /><br />
      <i class="bi bi-credit-card-2-back"></i>
      <label>CVV: </label>
      <br />
      <input
        type="num"
        class="form-control form2"
        v-model="cvv"
        minlength="3"
        maxlength="3"
        id="cvv"
        placeholder="123"
        required
      />
      <br /><br />
      <button type="submit" class="btn btn-lg btn-primary" @click="pago">
        <i class="bi bi-cash-coin"></i> Confirmar
      </button>
      <a href="tienda.php" class="btn btn-lg btn-primary"><i class="bi bi-x-octagon-fill"></i> Cancelar</a>
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
  const app = new Vue({
    el: '#app',
    data: {
      titulo: 'Tienda Online UNO',
      nombre: '',
      numero: '',
      mes: '',
      año: '',
      cvv: '',
      total: '',
      confirmarPago: false,
      productos: [] // Agregamos el arreglo de productos
    },
    methods: {
      comprobarPago: function (e) {
        // si entra en el if significa que el valor ingresado no es un numero
        if (isNaN(this.numero)) {
          alert('[ERROR] El número de la Tarjeta debe tener un valor numerico');
          this.numero = '';
          e.preventDefault();
        }
        if (isNaN(this.cvv)) {
          alert('[ERROR] El cvv de la Tarjeta debe tener un valor numerico');
          this.cvv = '';
          e.preventDefault();
        }
        if (this.año != '' && this.mes != '') {
            // Agregar condición para verificar que el año y el mes sean números
            if (isNaN(this.año) || isNaN(this.mes)) {
              alert('[ERROR] El año y el mes de la Tarjeta deben tener un valor numerico');
              this.año = '';
              this.mes = '';
              e.preventDefault();
            } else {
              // Concatenar el año y el mes y convertir a un número
              const fechaTarjeta = Number(this.año.toString() + this.mes.toString().padStart(2, '0'));
              const fechaActual = Number(new Date().getFullYear().toString().slice(-2) + (new Date().getMonth() + 1).toString().padStart(2, '0'));

              if (fechaTarjeta < fechaActual) {
                alert('[ERROR] La tarjeta está vencida');
                this.año = '';
                this.mes = '';
                e.preventDefault();
              }
            }
          }

      },
      pago: function () {
        this.confirmarPago = false;
        if (
          this.nombre != '' &&
          this.numero != '' &&
          this.mes != '' &&
          this.año != '' &&
          this.cvv != ''
        ) {
          this.confirmarPago = true;
        }
        if (this.confirmarPago === true) {
          // Creamos un objeto con los datos a enviar
          const datos = {
            productos: this.productos,
            total: this.total
          };
          // Convertimos el objeto a una cadena de consulta y la codificamos
          const queryString = new URLSearchParams(datos).toString();
          const encodedQuery = encodeURIComponent(queryString);
          // Redireccionamos a detalles.php con los datos en la URL
          window.location.href = `detalles.php?${encodedQuery}`;
        }
      },
      agregarProducto: function (producto) {
        this.productos.push(producto);
      }
    }
  });
</script>

  </body>
</html>