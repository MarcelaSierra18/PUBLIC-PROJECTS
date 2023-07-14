<!DOCTYPE html>
<html> 
    <head> 
        <title>Actividad 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta charset = UTF-8>
    </head>
    <body>

    <?php
    
    $datos = array(
    
    array(

        "Nombre" => "Juan Perez",
        "Direccion" => "Calle 2",
        "Telefono" => 1234567,
        "Cumpleanios" => "22/05/1980",
        "Color" => "Azul",
        "Significado" => "Cielo",

        
    ),

    array(

        "Nombre" => "Luis Garcia",
        "Direccion" => "Calle 2",
        "Telefono" => 1234567,
        "Cumpleanios" => "20/05/1996",
        "Color" => "Blanco",
        "Significado" => "Nube",

        
    ),

    array(

        "Nombre" => "Laura Gutierrez",
        "Direccion" => "Calle 3",
        "Telefono" => 1234567,
        "Cumpleanios" => "04/03/1990",
        "Color" => "Azul",
        "Significado" => "Cielo",

        
    ),

    array(

        "Nombre" => "Violeta Tovar",
        "Direccion" => "Calle 2",
        "Telefono" => 3456789,
        "Cumpleanios" => "02/02/1991",
        "Color" => "Amarillo",
        "Significado" => "Sol",

        
    ),

    array(

        "Nombre" => "Pilar Martinez",
        "Direccion" => "Calle 2",
        "Telefono" => 3456789,
        "Cumpleanios" => "02/02/1994",
        "Color" => "Amarillo",
        "Significado" => "Sol",

        
    ),

    array(

        "Nombre" => "Sara Gutierrez",
        "Direccion" => "Calle 2",
        "Telefono" => 3456789,
        "Cumpleanios" => "02/05/1991",
        "Color" => "Blanco",
        "Significado" => "Nube",

        
    )
    );

    ?>

    
    <h2>Tabla de colores y significados</h2>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha_cumplea&ntilde;os</th>
            <th>Color_favorito</th>
            <th>Significado</th>
       </tr>

       <?php

       $concat = '';

       foreach ($datos as $fila) {

        $concat .= '<tr>';
        $concat .= '<td>' .$fila["Nombre"] .'</td>';
        $concat .= '<td>' .$fila["Direccion"] .'</td>';
        $concat .= '<td>' .$fila["Telefono"] .'</td>';
        $concat .= '<td>' .$fila["Cumpleanios"] .'</td>';
        $concat .= '<td>' .$fila["Color"] .'</td>';
        $concat .= '<td>' .$fila["Significado"] .'</td>';
        $concat .= '</tr>';

       }
       echo
       $concat;

       ?>
       </table>
       
       <h2>Tabla condicional SI Azul</h2>

       <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha_cumplea&ntilde;os</th>
            <th>Color_favorito</th>
            <th>Significado</th>
       </tr>

       <?php
       
        $concat = '';

       foreach ($datos as $fila) {

        $concat .= '<tr>';

        if ($fila["Color"]=="Azul") {


        $concat .= '<td>' .$fila["Nombre"] .'</td>';
        $concat .= '<td>' .$fila["Direccion"] .'</td>';
        $concat .= '<td>' .$fila["Telefono"] .'</td>';
        $concat .= '<td>' .$fila["Cumpleanios"] .'</td>';
        $concat .= '<td>' .$fila["Color"] .'</td>';
        $concat .= '<td>' .$fila["Significado"] .'</td>';
        

        }

        $concat .= '</tr>';
    }
       echo
       $concat;

           
       ?>
       </table>

       <h2>Tabla condicional SI Amarillo</h2>

       <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha_cumplea&ntilde;os</th>
            <th>Color_favorito</th>
            <th>Significado</th>
       </tr>

       <?php
       
        $concat = '';

       foreach ($datos as $fila) {

        $concat .= '<tr>';

        if ($fila["Color"]=="Amarillo") {


        $concat .= '<td>' .$fila["Nombre"] .'</td>';
        $concat .= '<td>' .$fila["Direccion"] .'</td>';
        $concat .= '<td>' .$fila["Telefono"] .'</td>';
        $concat .= '<td>' .$fila["Cumpleanios"] .'</td>';
        $concat .= '<td>' .$fila["Color"] .'</td>';
        $concat .= '<td>' .$fila["Significado"] .'</td>';
        
        }

        $concat .= '</tr>';

    }
       echo
       $concat;

           
       ?>
       </table>

       <h2>Tabla condicional SI Blanco</h2>

       <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha_cumplea&ntilde;os</th>
            <th>Color_favorito</th>
            <th>Significado</th>
       </tr>

       <?php
       
        $concat = '';

       foreach ($datos as $fila) {

        $concat .= '<tr>';

        if ($fila["Color"]=="Blanco") {


        $concat .= '<td>' .$fila["Nombre"] .'</td>';
        $concat .= '<td>' .$fila["Direccion"] .'</td>';
        $concat .= '<td>' .$fila["Telefono"] .'</td>';
        $concat .= '<td>' .$fila["Cumpleanios"] .'</td>';
        $concat .= '<td>' .$fila["Color"] .'</td>';
        $concat .= '<td>' .$fila["Significado"] .'</td>';
       

        }

        $concat .= '</tr>';
    }
       echo
       $concat;

           
       ?>
       </table>

       

</body>
</html>