<?php require_once('conexion.php');
if (!isset($_SESSION)) {
  session_start();
}  ?>
<?php
if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }
    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
}
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$array_privadmin = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50);
$array_privreg = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 45, 46, 47, 48, 49);

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

  $query_lista = "SELECT * FROM qrcode where clave = '" . $_POST['clave'] . "'";
  $listaa = mysqli_query($conexion, $query_lista) or die(mysqli_error());

  if (mysqli_num_rows($listaa) == 0) {
    $insertSQL = sprintf(
      "INSERT INTO qrcode (`numinforme`, clave, nombre, marca, modelo, fecha_emision, fecha_vigencia, idnom, iding, idsup, estado) VALUES (lower(%s), lower(%s), %s, %s, %s, %s, %s, %s, %s, %s, %s)",
      GetSQLValueString($_POST['numinforme'], "text"),
      GetSQLValueString($_POST['clave'], "text"),
      GetSQLValueString($_POST['nombre'], "text"),
      GetSQLValueString($_POST['marca'], "text"),
      GetSQLValueString($_POST['modelo'], "text"),
      GetSQLValueString($_POST['fecha_emision'], "date"),
      GetSQLValueString($_POST['fecha_vigencia'], "date"),
      GetSQLValueString($_POST['idnom'], "int"),
      GetSQLValueString($_POST['iding'], "int"),
      GetSQLValueString($_POST['idsup'], "int"),
      GetSQLValueString($_POST['estado'], "int")
    );

    $Result1 = mysqli_query($conexion, $insertSQL) or die(mysqli_error());
    echo '<script language=javascript>
alert("Se Registro una nueva clave")
self.location="../index.html"
</script>';
  } else {
    echo '<script language=javascript>
alert("Existe ya un registro con los mismos datos")
self.location="../index.html"
</script>';
  }
}
?>