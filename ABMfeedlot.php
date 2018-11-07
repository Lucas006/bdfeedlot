<?php
require('conexion.php');
$tabla='Movimientos';
if (isset($_POST['btn_insertar']))
 {
		$idcorr=$_POST["idcorr"];
    $tbeb1=$_POST["tbeb1"];
    $tbeb2=$_POST["tbeb2"];
    $pbeb1=$_POST["pbeb1"];
    $pbeb2=$_POST["pbeb2"];
    $pcomid=$_POST["pcomid"];
    $anim=$_POST["anim"];
    $fecvac=$_POST["fecvac"];
    $oper=$_POST["oper"];
    $algo=mysqli_query($conexion,"SELECT * FROM Usuarios WHERE usuario='$oper'");
    $Aalgo=mysqli_fetch_array($algo);
    if (!empty($Aalgo)){
      mysqli_query($conexion,"INSERT INTO $tabla VALUES ('$idcorr', '1', '$tbeb1', '$tbeb2', '$pbeb1', '$pbeb2', '$pcomid', '$anim', '$fecvac', '$oper')");
  		echo "<script>alert('Inserción correcta');location.href='indexABM.php'</script>";
    }
    else{
      echo "<script>alert('Usuario no existente');location.href='index.ABM'</script>";
    }
}
else{
  if (isset($_GET['btn_actualizar']))
    {
        $idmod=$_GET["idmod"];
        $idcorr=$_GET["idcorral"];
        $tbeb1=$_GET["tbebe1"];
        $tbeb2=$_GET["tbebe2"];
        $pbeb1=$_GET["pbebe1"];
        $pbeb2=$_GET["pbebe2"];
        $pcomid=$_GET["pcomida"];
        $anim=$_GET["animal"];
        $fecvac=$_GET["fechavac"];
        $oper=$_GET["operador"];
        $algo=mysqli_query($conexion,"SELECT * FROM Movimientos WHERE operador='$oper'");
        $Aalgo=mysqli_fetch_array($algo);
          if (!empty($Aalgo)){
            mysqli_query($conexion,"UPDATE $tabla SET idCorral='$idCorr' tempBeb1='$tbeb1' tempBeb2='$tbeb2' pesoBeb1='$pbeb1' pesoBeb2='$pbeb2' pesoComida='$pcomid' tipoAnimal='$anim' fechaVacunacion='$fecvac' operador='$oper' WHERE idCorral='$idmod'");
      		  echo "<script>alert('Los datos se actualizaron correctamente!');location.href='indexABM.php'</script>";
          }
          else{
            echo "<script>alert('Usuario no existente');location.href='indexABM.php'</script>";
          }
    }
 	  else{
      if ($_GET['opcion']==2)
        {
          $id_eliminar=$_GET["eliminar"];
  	      mysqli_query($conexion,"DELETE FROM $tabla WHERE idCorral='$id_eliminar'");
          echo "<script>alert('Eliminación exitosa');location.href='indexABM.php'</script>";
        }
      else
    		  {echo " <script>alert('Complete los datos');location.href='Nmodificar.php'</script>";}}}
        echo ""
?>
