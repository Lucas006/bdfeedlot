<?php
  session_start();
  echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lan="es">
<head>
  <meta  charset="utf-8">
  <title>Feed Lot</title>
  <link rel="stylesheet" href="css/formulario.css"/>
  </head>
<body>
<ul>
<li><a href="#">Feed Lot</a></li>
<li><a href="login.php">Login</a></li>
</ul>

<h1>ABM Feed Lot</h1><br>

<form action="ABMfeedlot.php" method="POST" name="sistema" >
  <label for="nombre">Complete lo siguiente</label>
  <br><br>
  ID Corral<input type="number" min='1' max='1000' name="idcorr" class='nom' required>
  <br>
  <p>Temperatura (ºC)</p>
    Bebedero 1 <input type="number" min="-10" max="30" name="tbeb1" class='' required><br>
    Bebedero 2 <input type="number" min="-10" max="30" name="tbeb2" class='' required><br>
  <br>
  <p>Peso (Kg)</p>
    Bebedero 1 <input type="number" min="0" max="30" name="pbeb1" maxlength="5" class='' required><br>
    Bebedero 2 <input type="number" min="0" max="30" name="pbeb2" maxlength="5" class='' required><br>
    Comida <input type="number" min="0" max="30" name="pcomid" maxlength="5" class='' required><br>
  <br><br>
  Tipo de animal <input type="text" name="anim" maxlength="20" class='nom' required>
  <br><br>
  Fecha de vacunación <input type="date" name="fecvac" class='nom' required>
  <br><br>
  Operador <input type="text" name="oper" maxlength="20" class='nom' required>
  <br><br>
  <input type="submit" name="btn_insertar" value="Insertar">
  <input type="reset" value="Reset"><br><br>
</form>
<table>
<thead><tr><th>ID#</th><TH>Fecha Lectura</TH><th>Temp. Bebedero 1 (ºC)</th><TH>Temp. Bebedero 2 (ºC)</TH><TH>Peso Bebedero 1 (Kg)</TH><TH>Peso Bebedero 2 (Kg)</TH><th>Peso Comida</th><TH>Tipo de Animal</TH><th>Fecha de Vacunación</th><TH>Operador</TH><TH>OPCIÓN</TH></tr>
</thead>
<TBODY>
<?php
require("conexion.php");
$articulos=mysqli_query($conexion,"SELECT * FROM Movimientos");
while($fila=mysqli_fetch_array($articulos)){
?>
<tr>
  <td><?php echo $fila['idCorral'];?> </td>
  <td><?php echo $fila['fecLectura'];?> </td>
  <td><?php echo $fila['tempBeb1'];?> </td>
  <td><?php echo $fila['tempBeb2'];?> </td>
  <td><?php echo $fila['pesoBeb1'];?> </td>
  <td><?php echo $fila['pesoBeb2'];?> </td>
  <td><?php echo $fila['pesoComida'];?> </td>
  <td><?php echo $fila['tipoAnimal'];?> </td>
  <td><?php echo $fila['fechaVacunacion'];?> </td>
  <td><?php echo $fila['operador'];?> </td>
  <td><a class='amod' href="ABMfeedlot.php?opcion=2&eliminar=<?php echo $fila['idCorral'];?>">Eliminar</a><a class='amod' href="indexModificar.php?idc=<?php echo $fila['idCorral'];?>">Modificar</a></td>
</tr>
<?php
}
?>
</TBODY>
</table>
</body>
</html>
