<?php
    $maior = $_POST["1num"];
    for($i=1;$i<=5;$i++){
        if($_POST[$i."num"] > $maior){
            $maior = $_POST[$i."num"];
        }
    }
    echo "O maior número é: ".$maior;
?>
