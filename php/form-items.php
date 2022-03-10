<?php
require_once('conexion.php');
?>
<?php if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['U_spidusu']) and $_SESSION['U_spidusu'] == '') {
  echo '<script language=javascript>
    alert("Por Favor Inicie Sesion")
    self.location="login.php"
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingreso</title>
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
  <header>
    <div class="nav-barr">
      <section class="header-section-logo">
        <img src="../assets/images/logo-navbar.png" alt="" />
      </section>
      <section class="tittle-valid">
        <h1>Ingreso Items</h1>
      </section>
      <section class="user-menu">
        <div class="navbar-custom-menu">
              <ul class="dropdown-menu">                
                <li class="user-header">
                  <p>
                    <?php echo $_SESSION['U_spnombres'] . ' ' . $_SESSION['U_spapellidos']; ?> <br />
                    <?php echo $_SESSION['U_sptipo']; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="cerrar-sesion.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                  </div>
                </li>
              </ul>
        </div>
      </section>
    </div>
  </header>
  <main>
    <section class="section-two">
      <div class="formulario-container">
        <div class="formulario-container-tittle">
          <h2>Ingreso de Items</h2>
          <p>
            Llene el siguiente formulario con los datos del informe a
            publicar.
          </p>
        </div>
        <div class="formulario-ingreso">
          <form action="registro-qr-items.php" method="post" id="form1" name="form1">
            <div class="form-group">
              <input type="text" name="numinforme" value="" placeholder="No. Informe" />
            </div>

            <div class="form-group">
              <input type="text" name="clave" value="" placeholder="Clave" />
            </div>

            <div class="form-group">
              <input type="text" name="nombre" value="" placeholder="Nombre Item" />
            </div>

            <div class="form-group">
              <input type="text" name="marca" value="" placeholder="Marca" />
            </div>

            <div class="form-group">
              <input type="text" name="modelo" value="" placeholder="Modelo" />
            </div>

            <div class="form-group">
              <label for="">Fecha de emisión</label>
              <input type="date" name="fecha_emision" placeholder="Fecha de emision" />
            </div>

            <div class="form-group">
              <input type="text" name="idnom" value="" placeholder="Norma" />
            </div>

            <div class="form-group">
              <input type="text" name="iding" value="" placeholder="Ing. Laboratorista" />
            </div>

            <div class="form-group">
              <input type="text" name="idsup" value="" placeholder="Supervisor" />
            </div>


            <div class="box-footer">
              <button type="submit" class="" title="Gruardar registro">
                GUARDAR
              </button>
              <input type="hidden" name="MM_insert" value="form1" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer-contact">
      <div class="container-footer">
        <div class="contact-form">
          <div class="direction">
            <h2>Dirección</h2>
            <div class="direction-text">
              <p>
                Jacinto Canek 15-A <br />
                Col. San Juan Ixhuatepec, C.P. 54180, <br />
                Tlalnepantla, Edo. de México. <br />
                <br />
                <strong>TELS.: </strong> (55) 4426-1914, (55) 4426-4362,
                <br />
                (55) 4426-1034 Y (55) 4426-3060 <br />
                <strong>Email: </strong> atencionaclientes@labteso.com
              </p>
            </div>
          </div>
        </div>
        <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.1567275952947!2d-99.1040339708082!3d19.51468099917737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9e3ad19305b%3A0x897133b397a7bbf7!2sLaboratorio%20Teso%20de%20M%C3%A9xico!5e0!3m2!1ses!2smx!4v1636335669271!5m2!1ses!2smx" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <div class="footer-container">
      © Copyright 2021 - Laboratorio Teso de México S.A. de C.V.<br />
      Todos los derechos reservados.
    </div>
  </footer>
</body>

</html>