<?php

function matriu($n){
    $a = array();

    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $a[$i][$j] = $i;
            if($i<$j){
                $a[$i][$j] = $j;
            }
            else if($i == $j){
                $a[$i][$j] = "*";
            }
            else {
                $a[$i][$j] = rand(10,20);
            }
        }
    }
    return $a;
}
function mostraMatriu($matriu){

    echo "<table>";
    foreach($matriu as $fila => $col){
        echo "<tr>";
        foreach($col as $i => $c){
            echo "<td>".$c."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function transposaMatriu($array){
    $a = array();
    for($i = 0; $i < count($array); $i++){
        for($j = 0; $j < count($array); $j++){
            $a[$i][$j] = $array[$j][$i];
        }
    }
    return $a;

}

$x = matriu(5);
$g = transposaMatriu($x);

mostraMatriu($x);
mostraMatriu($g);

?>

