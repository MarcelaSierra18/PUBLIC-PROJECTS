<?php

if (isset($tabla)) {
$matriz = array(
    array("$tabla[0]","$tabla[1]","$tabla[2]","$tabla[3]","$tabla[4]"),        
    array("$tabla[5]","$tabla[6]","$tabla[7]","$tabla[8]","$tabla[9]"),        
    array("$tabla[10]","$tabla[11]","$tabla[12]","$tabla[13]","$tabla[14]"),        
    array("$tabla[15]","$tabla[16]","$tabla[17]","$tabla[18]","$tabla[19]"),        
    array("$tabla[20]","$tabla[21]","$tabla[22]","$tabla[23]","$tabla[24]"),        
        
);
$matriz[$fila - 1][$puesto - 1] = $estado;

//echo "<script> alert('$tabla') </script>";

echo mostrar($matriz);

}