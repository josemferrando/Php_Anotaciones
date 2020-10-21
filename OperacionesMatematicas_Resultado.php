<html>
<head>
  <title>Problema</title>
</head>
<body>

  <?php
  switch($_REQUEST['radio1']){
    case "suma":
      $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
      echo "La suma es:" . $suma;
    break;
    case "resta":
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    break;
    case "multiplicar":
      $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
      echo "La multiplicacion es:" . $multiplicacion;
    break;
    case "division":
      $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
      echo "La division es:" . $division;
    break;
    case "nombre":
      $nombre = $_REQUEST['valor1']." ".$_REQUEST['valor2'];
      echo "El nombre es:" . $nombre;
    break;
  }
 
  ?>
</body>
</html>