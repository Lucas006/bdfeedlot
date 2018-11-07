<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/indexModificar.css" />
	<title>Modificar</title>
</head>
<body>
<h1>Editar registro</h1>

<nav><ul><li><a href="indexABM.php">Volver a inicio</a></li></ul></nav>

<form action="ABMfeedlot.php" method="GET" name="form_agregar">
	<?php require('conexion.php');
		$corr_mod = $_GET['idc']; //Se toma el usuario pasado por URL
		$registro =	 mysqli_query($conexion,"SELECT * FROM Movimientos WHERE idCorral='$corr_mod'"); //Se toman los datos del usuario
		$fila = mysqli_fetch_array($registro); //Se los introduce en un arreglo para luego tomarlos a los datos
	?>
	<input type="hidden" name="idmod" value="<?php echo $_GET['idc']; ?>" required/><br />

	ID Corral<input type="number" min='1' max='1000' name="idcorral" class='nom' value="<?php echo $fila['idCorral']; ?>" required>
  <br>
  <p>Temperatura (ºC)</p>
    Bebedero 1 <input type="number" min="-10" max="30" name="tbebe1" class='' value="<?php echo $fila['tempBeb1']; ?>" required><br>
    Bebedero 2 <input type="number" min="-10" max="30" name="tbebe2" class='' value="<?php echo $fila['tempBeb2']; ?>" required><br>
  <br>
  <p>Peso (Kg)</p>
    Bebedero 1 <input type="number" min="0" max="30" name="pbebe1" maxlength="5" class='' value="<?php echo $fila['pesoBeb1']; ?>" required><br>
    Bebedero 2 <input type="number" min="0" max="30" name="pbebe2" maxlength="5" class='' value="<?php echo $fila['pesoBeb2']; ?>" required><br>
    Comida <input type="number" min="0" max="30" name="pcomida" maxlength="5" class='' value="<?php echo $fila['pesoComida']; ?>" required><br>
  <br><br>
  Tipo de animal <input type="text" name="animal" maxlength="20" class='nom' value="<?php echo $fila['tipoAnimal']; ?>" required>
  <br><br>
  Fecha de vacunación <input type="date" name="fechavac" class='nom' value="<?php echo $fila['fechaVacunacion']; ?>" required>
  <br><br>
  Operador <input type="text" name="operador" maxlength="20" class='nom' value="<?php echo $fila['operador']; ?>" required>
  <br><br>

	<input type="submit" value="Actualizar" name="btn_actualizar"/>
</form>
</body>
</html>
