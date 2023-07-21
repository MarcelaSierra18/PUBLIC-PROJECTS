<?php
function mostrar($cadena) {


$matrix = array(    
    array("<tr><td>1</td><td>","</td><td>","</td><td>","</td><td>","</td><td>","</td><tr>"),
    array("<tr><td>2</td><td>","</td><td>","</td><td>","</td><td>","</td><td>","</td><tr>"),
    array("<tr><td>3</td><td>","</td><td>","</td><td>","</td><td>","</td><td>","</td><tr>"),
    array("<tr><td>4</td><td>","</td><td>","</td><td>","</td><td>","</td><td>","</td><tr>"),
    array("<tr><td>5</td><td>","</td><td>","</td><td>","</td><td>","</td><td>","</td><tr>"),
      
);

$kadena = "<table border='1'><tr><td colspan='6'>ESCENARIO</td></tr><tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>";

for ($i=0;$i<count($matrix);$i++) {
    for ($j=0;$j<count($matrix);$j++) {
        $kadena = $kadena.$matrix[$i][$j].$cadena[$i][$j];
    }
}

$kadena = $kadena."<table>";

return $kadena;

}