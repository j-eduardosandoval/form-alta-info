<?php 
if (!isset($_SESSION)) {
  session_start();
}   
if(isset ($_SESSION['U_sdniu']) and $_SESSION['U_sdniu']!='' and $_SESSION['U_sptipo']!=''){
 
  echo '<script language=javascript>
	self.location="form-items.php"
</script>';
}
?>
<?php 
				 if (isset($_GET['falloo'])) {
          $mensaje ='Contraseña no válida. Vuelve a intentarlo.';}
				 elseif (isset($_GET['fallor'])) {
          $msgerror ='El usuario que ingresaste es incorrecto. Vuelve a intentarlo.' ;}
				 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validadar QR</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <script language="javascript">
function validacionrec() {
  var emailrec = document.getElementById('emailrec').value;
  var usuariorec = document.getElementById('usuariorec').value;
  if (emailrec.length == 0 && usuariorec.length == 0) {
    $("#recargadoerror").empty().append('* Debe ingresar por lo menos uno de ellos (Email o usuario)');
    return false;
  }
}
</script>
  </head>
  <body>
    <main class="login-main">
      <section class="login_content">
        <div class="login_form">
          <div class="login-tittle">
            <img src="../assets/images/logo.png" alt="">
            <p>Iniciar sesión</p>
          </div>
          <div class="section-two-form">
            <div class="login-form-container">
              <form id="loginform" method="post" name="form1" action="proclogin.php">
                <div class="group-form">                
                  <input name="miuser" type="text" placeholder="Usuario o correo electronico" />
                </div>
                <div class="group-form">                
                  <input type="password" name="mipass" id="" placeholder="Introduce tu contraseña" />
                </div>
                <div class="login-footer-button">
                  <div class="login-footer-button-container">
                    
                    <button type="submit" class="button-login">
                      Seguiente
                    </button>
                    <input type="hidden" name="MM_insert" value="form1" />
                  </div>
                </div>
                <?php if (isset($msgerror) ){echo '<div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡Aviso!</strong> '. $msgerror.'
        </div>'; }?>
        <?php if (isset($mensaje) ){echo '<div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡Aviso!</strong> '. $mensaje.'
        </div>'; }?>
              </form>
            </div>
          </div>

        </div>
      </section>
    </main>
  </body>
</html>
