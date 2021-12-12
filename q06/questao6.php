<?php
    $soma = 0;
    for($i=1;$i<=10;$i++){
        $soma += $_POST[$i.'num'];
    }
    $media = $soma/10;
    echo "A média dos números é ".$media;
?>
