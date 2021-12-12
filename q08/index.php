<html>
    <head>
        <title>Questão</title>
    </head>
    <body>
        <h1>Questão08</h1>
        <form name="form1" action="index.php" method="post">
            <label> Digite o número de idades?</label>
            <input type="text" name="total">
            <button type="submit">ok</button>            
        </form>
        <form name="form2" action="questão08.php" method="post">
            <?php
                if (isset($_POST["total"])){
                    $qtd = $_POST["total"];
                }
                    for($i=1;$i<=$qtd;$i++){
                        echo '<label>'.$i.''.'° idade </label> ';
                        echo '<input style="margin-bottom: 10px"type="text" name="'.$i.'num"> <br>';
                    }
                    echo '<button type="submit">Visualizar a quantidade</button>';        
            ?>
        </form>
    </body>
</html>