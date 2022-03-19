

<html>
    <head>

        <title>
            <h1>Média por Aluno</h1>
        </title>
    <head>

            <body>
                <h3>Calculadora média Aluno</h3>


            <form action='home.php' method="get">
                Nota 1: <input type="number" name="num1"><br>
                Nota 2: <input type="number" name="num2"><br>
                Nota 3: <input type="number" name="num3"><br>
                Nota 4: <input type="number" name="num4"><br>
                <input type="submit">
            </form>
               
            <?php 
                $nota1 = $_GET['num1'];
                $nota2="num2"
                $nota3="num3"
                $nota4="num4"
                

                $media = ($nota1 + $nota2 + $nota3 + $nota4)/4
                
                echo "Média dos alunos: $media";
            ?>
            </body>
</html>