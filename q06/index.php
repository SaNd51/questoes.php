<html>
    <head>
        <title>Questão</title>
    </head>
    <body>
        <h1>Questão06</h1>
        <form name="form1" action="questao6.php" method="post">
        <?php
            for($i=1;$i<=10;$i++){
                echo '<label>'.$i.''.'° número</label> ';
                echo '<input style="margin-bottom: 10px"type="text" name="'.$i.'num"> <br>';
            }
            
        ?>
            <button type="submit" value="submit"> Calcular </button>
        </form>
    </body>
</html>