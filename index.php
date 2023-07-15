<!DOCTYPE html>
<html> 
    <head> 
        <title>Ejemplo 1</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta charset = UTF-8>
    </head>
    <body>

      <h1>1. Etiquetas PHP</h1>
        <h3>Nombres:</h3>
        <?php
         echo
        "Marcela </br>";          
        ?>

        <h3>Apellidos:</h3>
        <?php
        echo
        "Sierra </br>";
        ?>  

        <h3>Edad:</h3>
        <?php
        echo
        "29 a&ntildeos";
        ?>

        <h3>Telefono:</h3>
        <?php
        echo
        "+57 3214492929";
        ?>

        <h3>Direccion:</h3>
        <?php
        echo
        "<strong>Cr.</strong> 34 <strong>No.</strong> 54-25";//Direccion con negrilla
        ?>

      <h1>2. Manejo de datos en php</h1>
       <h3>Nombres:</h3>

        <?php

       $Nombre1 = 'Claudia';
       $Nombre2 = 'Marcela';

       echo
       "$Nombre1 $Nombre2 </br>";
       ?>

       <h3>Apellidos:</h3>

        <?php

        $Apellido1 = 'Sierra';
        $Apellido2 = 'Parra';

        echo
        "$Apellido1 $Apellido2 </br>";
        ?>

        <h3>Edad:</h3>

        <?php

        $Edad = 29;

        echo
        "$Edad </br>";
        ?>

        <h3>Estatura</h3>

        <?php

        $Estatura = 1.56;

        echo
        "$Estatura </br>";
        ?>

        <h3>Tel&eacute;fono:</h3>
        <?php

        $telefono = '+57 3214492929';

        echo
        "$telefono </br>"; 
        ?>

        <h3>Direccion</h3>

        <?php

        $Direccion = 'Kr 122D 129B 60';

        echo
        "$Direccion";

        ?>

        <p><b>El valor de la compra es: $</b>

        <?php

        $Valor = 1000;

        echo

        "$Valor";
        ?>
        </p>

        <p><b>M&aacute;s el IVA: $</b>

        <?php

        $Valor = $Valor * 1.16;

        echo

        "$Valor";
        ?>
        </p>

        <p><b>Mas el descuento del 5%: $</b>

        <?php

        $Valor = $Valor * 0.95;

        echo

        "$Valor";

        ?>
        </p>

        <h3>Variable predefinida</h3>

        <p>
            <b>Software del servidor</b>
            <?php

              echo $_SERVER['SERVER_SOFTWARE'];
              ?>

    <?php

      $nombreCompleto = "Claudia Marcela Sierra Parra";
      $fechaIngreso = "10/10/2023";
      $edad = 29;
      $estatura = 1.56;
      $salario = 4e6;

      ?>

    <p>
        <?php
        echo
         "la se&ntilde;ora $nombreCompleto trabaja con la empresa "
         . "Sysdevelopment desde el d&iacute;a $fechaIngreso, "
         . "Su edad es $edad a&ntilde;os, su estatura "
         . "es $estatura mts. y su salario es $$salario";
         ?>
         </p>

    <h3>Llaves</h3>

    <?php 

    $listadoProductosCodigoNombre = array (
        1234 => "Arroz x libra",
        2431 => "Frasco aceite x 1000 ml.",
        2345 => "Mantequilla x 250 g."
    );
    ?>
    <p>

    <?php 

     $codigoProducto = 1234;

     echo

     "El producto con codigo $codigoProducto es: "

     ."$listadoProductosCodigoNombre[$codigoProducto]";
     ?>
     </p>

    <h3>Llaves alfanumericas</h3>

    <?php

     $listadoDiasActividad = array(
        "lunes" => "caminar",
        "martes" => "sentadillas",
        "miercoles" => "flexiones",
        "jueves" => "abdominales",
        "viernes" => "estiramiento",
        "sabado" => "saltar lazo",
        "domingo" => "futbol"
     );
     ?>
    <p>

    <?php 
    $dia = 'miercoles';

    echo
    "La actividad para el dia $dia es: "
    . "$listadoDiasActividad[$dia]";
    ?>
    </p>

    <?php

    $listadoEstudiantes = array (
        "Ardila, Pablo",
        "Benitez, Nancy",
        "Cepeda, Juan",
        "Castro, Luis",
        "Soto, Carlos"
    );
    ?>

    <p>
    <?php

    echo

    "El primer estudiante de la lista es: "
    . "$listadoEstudiantes[0] </br>";

    echo
    "El segundo estudiante de la lista es: "
    . "$listadoEstudiantes[1] </br>";

    echo
    "El tercer estudiante de la lista es: "
    . "$listadoEstudiantes[2] </br>";

    echo
    "El cuarto estudiante de la lista es: "
    . "$listadoEstudiantes[3] </br>";

    echo
    "El quinto estudiante de la lista es: "
    . "$listadoEstudiantes[4] </br>";

    ?>
    </p>

    <?php 

    $directorioTelefonico = array (
        array ("Marcela","Suba",2345,"agosto 04"),
        array ("Isabel","Suba",3820,"agosto 11"),
        array ("Edwin","Tintal",5376,"Abril 10")
    );
    ?>

    <p>
        <?php

        echo
        "La informacion de la primera persona es: "
        ."Nombre: " .$directorioTelefonico[0][0] .", Localidad: " .$directorioTelefonico[0][1] .", Numero: " .$directorioTelefonico[0][2] 
        . ", Fecha de nacimiento: " .$directorioTelefonico[0][3] ."</br>"; 

        echo
        "La informacion de la segunda persona es: "
        ."Nombre: " .$directorioTelefonico[1][0] .", Localidad: " .$directorioTelefonico[1][1] .", Numero: " .$directorioTelefonico[1][2] 
        . ", Fecha de nacimiento: " .$directorioTelefonico[1][3] ."</br>";

        echo
        "La informacion de la tercera persona es: "
        ."Nombre: " .$directorioTelefonico[2][0] .", Localidad: " .$directorioTelefonico[2][1] .", Numero: " .$directorioTelefonico[2][2] 
        . ", Fecha de nacimiento: " .$directorioTelefonico[2][3] ."</br>";
        ?>
        </p>

    <p>
        <?php
        define('PI',3.1416);

        echo
        "El numero PI es: " .PI;
        ?>
        </p>

    <h3>Expresion con operador aritmetico</h3>

    <p>
        <?php

        $nombreTrabajador = "Marcela Sierra";
        $salario = 2e6;
        $porcentajeReteFuente = 0.011;
        $reteFuente = $salario * $porcentajeReteFuente;
        $totalDevengado = $salario  * (1-$porcentajeReteFuente);

        echo
        "El trabajador $nombreTrabajador tiene un salario de: $$salario"
        . ", se le hace un descuento por retencion en la fuente de: $$reteFuente"
        . ", el salario total que devenga el trabajador es de: $$totalDevengado";
        ?>
        </p>

        <p>
            <?php
            $manzanas = 3;
            $regalo = 4;

            echo
            "Pablo tiene $manzanas manzanas, Maria le regala $regalo " 
            . "Manzanas, por lo tanto ahora Pablo tiene " . ($manzanas += $regalo) ." manzanas.";
            ?>
            </p>

            <p>
                <?php
                $edad = 21;

                echo
                "El anio pasado Nancy tenia $edad anios. "
                . "Puesto que este anio ella ya cumplio; ahora "
                . "tiene " . ++$edad ." anios";
                ?>
                </p>

                <p>
                    <?php
                    $edad = 21;

                    echo
                    "El anio pasado Nancy tenia " . $edad++ ."anios, puesto que este anio ella ya cumplio, ahora tiene $edad anios";
                    ?>
                    </p>

                    <p>
                        <?php
                        $edad = 6;
                        $edadFutura = $edad;
                        $edadFutura += 4;

                        echo
                        "En este momento Pablo tiene $edad anios, cuando pasen "
                        . "4 anios, Pablo tendra $edadFutura anios.";
                    ?>
                    </p>
                    <p>
                        <?php

                        $edad = 6;
                        $edadFutura = &$edad;

                        echo
                        "En este momento Pablo tiene $edad anios </br>";

                        $edadFutura += 4;

                        echo
                        "- Cuando pasen 4 anios Pablo tendra $edad anios.";
                        ?>
                    </p>

            <h1>Estructuras de control</h1>

            <h3>Condicionales</h3>
            <p>
                <?php
                $a = 3;
                $b = 4;

                if ($a >= 3) {

                    echo
                    "La variable \$a es mayor o igual que 3 </br>";

                    if ($b >= 4) {

                        echo
                        "La variable \$b es mayor o igual que 4 </br>";

                    }
                }
                ?>
            </p>
            <p>
                <?php
                $a = 3;

                if ($a > 3) {
                    
                    echo
                    "La variable \$a es mayor que 3 </br>";

                } elseif ($a < 3) {

                   echo
                    "La variable \$a es menor que 3 </br>";
                            
                } else {

                    echo
                    "La variable \$a es igual a 3 </br>";
                }
                
                ?>
                </p>

            <h3>Ciclo While</h3>
            <p>
                <?php
                $a = 1;

                while ($a <= 5) {

                    echo
                    "$a </br>"; //mostrar en orden inverso
                    
                    $a++;
                }
                ?>
            </p>
            <p>
                <?php
                $a = 5;
                
                while ($a >= 1) {

                    echo
                    "$a </br>";

                    $a--;
                }
                ?>
            </p>    
            
            <h3>Ciclo do-while</h3>
            <p>
                <?php
                do {
                    echo "$a </br>";
                    $a++;
                } while ($a <= 5)
                ?>
            </p>    

            <h3>Ciclo for</h3>
            <p>
                <?php
                
                for ($i = 1; $i <= 5; $i++) {

                    echo
                    "$i </br>";
                }
                ?>
            </p>
            <h3>Ciclo for-each</h3>
            <p>
                <?php
                $arregloAnimales = array (
                    "Perro",
                    "Gato",
                    "Conejo",
                    "Liebre",
                    "Tortuga"
                );
                foreach ($arregloAnimales as $animal) {
                    echo
                    "$animal </br>";
                }
                ?>
            </p>

            <h1>TERCERA UNIDAD</h1>

            <?php
            
            imprimeTabla ();

            function imprimeTabla () {
            ?>

            <table border = "1">
                <thead>
                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Fecha nacimiento</td>
            </thead>
            <tr>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            </table>
            <?php
            }

            imprimeTabla ();
            ?>

            <?php

            function imprimeTablaDos($filas = 3) {
                ?>

                <table border = "1">
                    <thead>
                        <td>Nombre</td>
                        <td>Direccion</td>
                        <td>Telefono</td>
                        <td>Fecha nacimiento</td>
            </thead>
            <?php

            for ($i = 1; $i <= $filas; $i++) { //no entiendo por que si cambio el valor de i me imprime menos filas

                ?>

                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
            </tr>
            <?php
            }
            ?>

            </table>

            <?php

        }

            imprimeTablaDos ();

            imprimeTablaDos (5);

            ?>

            <?php

            function encuentraValorArreglo ($arreglo, $valorBuscado) {

                foreach ($arreglo as $valor) {
                    if ($valor == $valorBuscado) {
                        return TRUE;
                    }
                }

                return FALSE;

                }

                $arregloAnimales = array (

                    "Perro",
                    "Gato",
                    "Liebre",
                    "Conejo",
                    "Vaca",
                    "Lobo",
                    "Abeja",
                    "Oveja",
                    "Pollo",
                );

                $animalQueEsta = "Vaca";
                $animalQueNoEsta = "leon";

                if (encuentraValorArreglo ($arregloAnimales, $animalQueEsta)) {

                    echo

                    "$animalQueEsta si se encuentra en el arreglo </br>";
                }

                if (!encuentraValorArreglo ($arregloAnimales, $animalQueNoEsta)) { //No entiendo !
 
                    echo

                    "$animalQueNoEsta no se encuentra en el arreglo";
                }
                ?>

                <?php

                require_once 'ejemplo_4_Biblioteca.php';

                $listadoAmigos = array (
                    array ("nombre" => "Juan Perez",
                    "direccion" => "Clle. 3 # 25 - 40",
                    "telefono" => "2345674",
                    "fechaNacimiento" => "12/03/2000",
                    "colorFavorito" => "Azul"
                ),
                array(
                    "nombre" => "Lola Fuentes",
                    "direccion" => "Cra. 4 # 12 - 18",
                    "telefono" => "2345674",
                    "fechaNacimiento" => "07/12/1980",
                    "colorFavorito" => "Verde"
                ),
                array(
                    "nombre" => "Pablo Reyes",
                    "direccion" => "Cra. 16 # 125 - 15",
                    "telefono" => "3456271",
                    "fechaNacimiento" => "03/07/1987",
                    "colorFavorito" => "Amarillo"
                ),
            );)
                )







                    

                
                


            
            
                
                
                
       


                     




    </body>
</html>
