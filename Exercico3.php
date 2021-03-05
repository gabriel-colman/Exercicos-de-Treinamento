<?php

$num = 8;

if ($num > 0) {
    $valor = $num;
    
    for ($index = ($valor - 1 ); $index > 0; $index--) {
        $valor = $valor * $index;//isso é feito para que valor não fique somenete o numero de $num
//        echo $valor. " ";
        
    }
} else {
    $valor = 0;
}
echo "!$num = $valor";

?>
