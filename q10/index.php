<html>
    <head>
        <title>Questão</title>
    </head>
    <body>
        <h1>Questão10</h1>
        <form name="form1" action="index.php" method="post">
            <label> Informe a data</label>
            <input type="date" name="data">
            <button type="submit">click</button>            
        </form>
        <?php
            if (isset($_POST["data"])){
                $dat = explode("-",$_POST["data"]);
                $cont = 0;
                foreach ($dat as $n){
                    if ($cont == 0){
                        echo 'ano: '.$n.'<br>';
                    }
                    if ($cont == 1){
                        echo 'mes: '.$n.'<br>';
                    }
                    if ($cont == 2){
                        echo 'dia: '.$n.'<br>';
                    }

                    $cont++;
                }
            }        
        ?>
    </body>
</html>