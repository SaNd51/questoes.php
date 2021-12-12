<?php
    $t = count($_POST);
    $maior = 0;
    $menor = 0;
    for($i=1;$i<=$t;$i++){
        if($_POST[$i."num"] > 17){
            $maior ++;
        }
        if($_POST[$i."num"] < 18){
            $menor ++;
        }
    }
    echo "quantidade de maiores de idade: ".$maior.'<br>';
    echo "quantidade de menores de idade: ".$menor;
?>