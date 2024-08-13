<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
</head>
<body>
    <form action="cadastrocidadeexe.php" method="post">
        <fieldset>
        <legend>Cadastro de Cidades</legend>
            <div>
            <label for="nome_cidade">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <br>
        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MG">MG</option>
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