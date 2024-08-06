<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro animal</title>
</head>
<body>
    <form action="cadastroanimalexe.php" method="post">
        <fieldset>
            <legend>Cadastro Animal</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <br>
            <div>
                <label for="email">Especie</label>
                <input type="text" name="especie" id="especie">
            </div>
            <br>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca">
            </div>
            <br>
            <div>
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento">
            </div>
            <br>
            <div>
                <label for="castrado">Situação</label>
                <input type="hidden" name="castrado" id="castrado" value="0">
                <input type="checkbox" id="castrado" name="castrado" value="1">Castrado
            </div>
            <br>
            <div>
                    <?php

                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }

                    ?>
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>