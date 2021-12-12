<html>
    <head>
        <title>Questão</title>
    </head>
    <body>
        <h1>Questão09</h1>
        <form name="form1" action="index.php" method="post">
            <label> Digite o número de nomes</label>
            <input type="text" name="total">
            <button type="submit">ok</button>            
        </form>
        <form name="form2" action="questão09.php" method="post">
            <?php
                if (isset($_POST["total"])){
                    $qtd = $_POST["total"];
                    for($i=1;$i<=$qtd;$i++){
                        echo '<label>Informe o nome '.$i.' '.' da lista</label> ';
                        echo '<input style="margin-bottom: 10px"type="text" name="'.$i.'num"> <br>';
                        
                    }
                    echo '<button type="submit">Visualizar os nomes</button>';
                }        
            ?>
        </form>
    </body>
</html>