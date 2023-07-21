<!DOCTYPE html>
<html> 
    <head> 
        <title>Actividad 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta charset = UTF-8>
    </head>
    <body>
    <?php
    if (isset($kadena)) {
        echo $kadena;
    } else {
        echo " 
        <table border='1'>
        <tr><td colspan='6'>ESCENARIO</td></tr>
        <tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
        <tr><td>1</td><td>L</td><td>L</td><td>L</td><td>L</td><td>L</td></tr>
        <tr><td>2</td><td>L</td><td>L</td><td>L</td><td>L</td><td>L</td></tr>
        <tr><td>3</td><td>L</td><td>L</td><td>L</td><td>L</td><td>L</td></tr>
        <tr><td>4</td><td>L</td><td>L</td><td>L</td><td>L</td><td>L</td></tr>
        <tr><td>5</td><td>L</td><td>L</td><td>L</td><td>L</td><td>L</td></tr> 
    </table>
        ";
    }

    ?>
  

    <?php
    include 'funciones.php';
    include 'presentar.php';
    $matriz = array(
        array("L","L","L","L","L",),        
        array("L","L","L","L","L",),        
        array("L","L","L","L","L",),        
        array("L","L","L","L","L",),        
        array("L","L","L","L","L",)     
    );
    
 $kadena = "";
for ($i=0;$i<count($matriz);$i++) {
    for ($j=0;$j<count($matriz);$j++) {
        $kadena = $kadena.$matriz[$i][$j];
    }
}

?>
    <br>

    <form method = "POST">
    <label for="fila">Fila:</label>
  <input type="text" id="fila" name="fila"><br><br>
  <label for="puesto">Puesto:</label>
  <input type="text" id="puesto" name="puesto"><br><br>

  <label for="reservar">Reservar</label>
  <input type="radio" name="estado" value="R"><br>
  <label for="comprar">Comprar</label>
  <input type="radio" name="estado" value="V"><br>
  <label for="liberar">Liberar</label>
  <input type="radio" name="estado" value="L"><br>
  <textarea name = "mensaje" style = "display:none;"><?php echo $kadena ?></textarea>
  <input type="submit" name="enviar" value="Enviar">
  <input type="reset" value="Borrar">
  </form>

  <?php

  if(isset($_POST['enviar'])){ 
$fila = $_POST['fila'];
$puesto = $_POST['puesto'];
$estado = $_POST['estado'];
$tabla = $_POST['mensaje'];
  }


?>













    </body>
</html>