<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Categoria de produto</title>

    <style>
        form {
            font-family: MS UI Gothic;
            margin-left: 1em;
        }

        h2 {
            margin-bottom: 0;
        }

        h3 {
            margin-bottom: 1.2rem;
            margin-top: 0.5rem;
        }

        label, input {
            font-size: 20px;
        }

        label {
            margin-right: 6px;
            font-weight: bold;
        }

        input {
            margin-bottom: 1.5rem;
        }

        button {
            font-size: 20px;
            font-family: Georgia;
            display: block;
        }
    </style>
</head>
<body>
    <form action="/cat_produto/save" method="post">
        <h2>CATEGORIA DO PRODUTO</h2>
        <h3>Por favor, preencha a informação abaixo:</h3>

        <input type="hidden" value="<?= $model->id ?>" name="id" />
        
        <label for="descricao">DESCRIÇÃO:</label>
        <input name="descricao" type="text" value="<?= $model->descricao ?>" />

        <button type="submit">Enviar</button>
    </form>
</body>
</html>