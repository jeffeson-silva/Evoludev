<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Evoludev</title>

</head>

<body>

    <header>
        <div class="title">
            <h2>EVOLUDEV</h2>
        </div>
        <div>
            <h4>Nessa página você monitora sua evolução no mundo da tecnologia!</h4>
        </div>

        <div>
            <a style="color: white; margin-left: 80%; border-radius: 5px; padding-left: 2%; padding-right:2%; font-size: 23px" href="lista.php">Ir para listagem</a>
        </div>
    </header>

    <main>
        
        <form action="main.php" method="POST">
            <fieldset>
                
                <div>
                    <label for="">Faaala, Dev! Diz aí qual a tecnologia ou linguagem de programação que você mais utilizou hoje?</label><br><br>
                    <input class="entrada-texto" type="text" name="linguagem" id = "linguagem"><br>
                </div>

                <div>
                    <label for="">O que você aprendeu de mais interessante sobre essa Tech hoje?</label><br><br>
                    <input class="entrada-texto" type="text" name="aprendizado" id = "aprendizado">
                </div>

                <div>
                    <h3>Agora preencha de 0 a 10</h4><br>

                    <label for="">Qual o seu nível de confiança para entrar no mercado de T.I?</label><br>
                    <input class="entrada-number" type="number" name="confianca" id="confianca">
                </div>

                <div>
                    <label for="">Como você define o seu nível de preparo para ser um Dev?</label><br>
                    <input class="entrada-number" type="number" name="preparo" id="preparo">
                </div>

                <div>
                    <label for="">Como você define o seu nível de ansiedade?</label><br>
                    <input class="entrada-number" type="number" name="ansiedade" id="ansiedade">
                </div>
            </fieldset> <br>

            <div><input  class="" type="submit" name="submit" id="submit"></div>
        </form>


    </main>

    <footer>

    </footer>


    
</body>
</html>


<?php 

if( (isset($_POST['linguagem'])) && (isset($_POST['aprendizado']))  && (isset($_POST['confianca'])) && (isset($_POST['preparo'])) && (isset($_POST['ansiedade'])))  {

    $host = "localhost";
    $user = "root";
    $pwd = "matrix";
    $bd = "jeff";



    $conexao = mysqli_connect($host,$user,$pwd,$bd);

    

    $linguagem = $_POST['linguagem'];
    $aprendizado = $_POST['aprendizado'];
    $confianca = $_POST['confianca'];
    $preparo = $_POST['preparo'];
    $ansiedade = $_POST['ansiedade'];
    $dia = date("Y-m-d");
    $hora = date("H:i:s");

    $query = "insert into evoludev (linguagem,aprendizado,confianca,preparo,ansiedade,dia,hora) values ('$linguagem','$aprendizado','$confianca','$preparo','$ansiedade','$dia','$hora')";
    
    $res = mysqli_query($conexao, $query);

   


    if($res)
    {
        echo '"<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Dados salvos com successo!</h4>';
        
    } else {

        echo "Falha ao tentar inserir dados";
    }

    

 
}


?>