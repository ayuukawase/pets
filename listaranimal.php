<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Animal</title>
</head>
<body>
    <?php

        include('includes/conexao.php');
        $sql = "SELECT ani.id, ani.nome nomeanimal, ani.especie, ani.raca, ani.data_nascimento, ani.castrado, ani.id_pessoa FROM animal ani LEFT JOIN animal ani on ani.id = ani.id_cidade";
        //echo $sql;     
        $result = mysqli_query($con, $sql); // executa a consulta

    ?>
</body>
</html>