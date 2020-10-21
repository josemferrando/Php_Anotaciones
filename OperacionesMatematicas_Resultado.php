<html>
<head>
  <title>Problema</title>
</head>
<body>

  <?php
  switch($_REQUEST['radio1']){
    case "Suma":
      $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
      echo "La suma es:" . $suma;
    break;
    case "Resta":
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    break;
    case "Multiplicar":
      $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
      echo "La multiplicacion es:" . $multiplicacion;
    break;
    case "Division":
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