<?php
    $t = count($_POST);
    $nome = $_POST;
    for($i=$t;$i>0;$i--){
        echo $nome[$i.'num'].'<br>';
    }
    
?>