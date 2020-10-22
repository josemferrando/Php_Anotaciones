<!DOCTYPE html>
<html>
   <head>
        <title>Buscar Producto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
</html>
<body>
    <div class='container'>
		<div class='jumbotron'>
			<h1>Buscar Producto</h1>
			<p>Introduce todos los datos para buscar un producto en la base de datos.</p>
		</div>
		<form name='formulariobuscar' action='{{ 'productos/show' }}' method='get'>
		<div class='form-group'>
			{{csrf_field()}}
			<label for='id'>Introduce el id del producto:</label>
			<input type='number' class='form-control' placeholder='Introduce el id' name='id' value="<?php $id ?>"><br>
			<label for='id'>Introduce el nombre del producto:</label>
			<input type='text' class='form-control' placeholder='Introduce el nombre' name='nombre' value="<?php $nombre ?>" size=30><br>
			<label for='precio'>Introduce el precio del producto:</label>
			<input type='decimal' class='form-control' placeholder='Introduce el precio' name='precio' value="<?php $precio ?>"><br>
		</div>
		<div class='botons-group'>
			<input type='submit' name='buscar' value='BUSCAR'>
			<input type='submit' name='volver' value='VOLVER'>
		</div>
		</form>
	</div>
</body>
