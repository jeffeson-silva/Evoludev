<?php 


    $host = 'localhost';
    $user = 'root';
    $pwd = 'matrix';
    $bd = 'jeff';

    $conexao = mysqli_connect($host, $user, $pwd, $bd);
    $query = "select * from evoludev where linguagem is not null";

    $res = mysqli_query($conexao, $query);
    $row[] = '';

    

    while ($rows[] = mysqli_fetch_array($res)){   

        if( isset($rows['linguagem']) && isset($rows['aprendizado']) && isset($rows['confianca']) && isset($rows['preparo']) && isset($rows['ansiedade']) && isset($rows['dia']) && isset($rows['hora']))  {             

        $linguagem = $rows['linguagem'];
        $aprendizado = $rows['aprendizado'];
        $confianca = $rows['confianca'];
        $preparo = $rows['preparo'];
        $ansiedade = $rows['ansiedade'];
        $dia = date('d/m/Y', strtotime($rows['dia']));
        $hora = $rows['hora'];

        }

    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <title>Document</title>
</head>
<body>
    
    <div>
        <div>
            <h2 style="text-align:center;">ACOMPANHAMENTO DE EVOLUÇÃO DO DEV</h2>
            <a style="margin-left:90%; color: white; font-size:25px" href="main.php">Voltar</a>
            <table>                
                <thead>
                    <tr>
                        <th>TECH OU L.P USADA MAIS USADA</th>
                        <th>APRENDIZADO</th>
                        <th>NIV. CONFIANÇA (0 a 10)</th>
                        <th>NIV. PREPARO (0 a 10)</th>
                        <th>NIV. ANSIEDADE (0 a 10)</th>
                        <th>DATA</th>
                        <th>HORA</th>
                    </tr>
                </thead>

                <tbody>

                <?php 
                                        
                                foreach ($rows as $row)
                                {
                                        if (!empty($row['linguagem']))
                                        {
                                            
                                            echo 
                                            '<tr>
                                            <td>'.$row['linguagem'].'</td>
                                            <td>'.$row['aprendizado'].'</td>
                                            <td>'.$row['confianca'].'</td>
                                            <td>'.$row['preparo'].'</td>
                                            <td>'.$row['ansiedade'].'</td> 
                                            <td>'.date('d/m/Y',strtotime($row['dia'])).'</td>
                                            <td>'.$row['hora'].'</td>                                           

                                             </tr>';

                                        }
                                        
                                }

                ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>