<?php
if (!isset($_SESSION)) {
  session_start();
} 
 ?>
<?php
//session_name($usuarios_sesion);
session_unset();
session_destroy();
echo "<META HTTP-EQUIV=Refresh CONTENT='0.5;URL=../index.php'>";  

?>
