<?php

$numeros = [2,3,4,5,6];


function getFactorial($value){
    if($value==1){
        return 1;
      }else{
        return $value * getFactorial($value-1);
      }
}

function factorial_array($array){
    $a = array();
    if( is_array($array)){
        foreach($array as $key => $value){
            $a[$value] =  getFactorial($value);
        }

        return $a;
    }else{
        return false;
    }
}
print_r(factorial_array($numeros));
?>

