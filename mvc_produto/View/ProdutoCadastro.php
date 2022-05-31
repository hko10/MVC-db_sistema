<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <title>Cadastro - Produto</title>

    <style>
    h1 {
        font-size: 5rem;
        color: white;
        font-family: 'Amatic SC', cursive;
        font-weight: 700;
    }
    
    :root {
        --bd: #dedfe0;
    }

    input {
        font-size: 2rem;
        background-color: var(--bd);
        font-family: 'Allura', cursive;
        width: 10em;
        height: 1.6em;
        padding-left: 10px;
        text-align: center;
        outline: none;
        border: none;
        margin-bottom: 1.2rem;
        border: 2px solid white;
        border-radius: 5px;
    }

    input:hover {
        outline: 3px dashed white;
        border: 2px solid var(--bd);
    }

    ::placeholder {
        opacity: 1;
        color: black;
    }

    button {
        font-size: 2rem;
        border: 3px dotted white;
        width: 6em;
        color: #323333;
        text-shadow: 0 1px #323333;
        background-color: var(--bd);
        font-family: 'Amatic SC', cursive;
        font-weight: bolder;
        margin-top: 2rem;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #212121;
        color: white;
    }
    
    body {
        margin: 0;
        background-color: #6b95b5;
    }

    img {
        width: 30px;
    }
    </style>
</head>
<body>
    <center>
    <h1>CADASTRO DO PRODUTO</h1>
    <form action="/produto/save" method="post">
        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <input name="nome" value="<?= $model->nome ?>" type="text" placeholder="Nome" />
        <br><br>

        <input name="preco" value="<?= $model->preco ?>" type="double" placeholder="Preço" />
        <br><br>

        <input name="descricao" style="margin-bottom: 0;" value="<?= $model->descricao ?>" type="text" placeholder="Descrição" />
        <br> <br>
        
        <button type="submit">Enviar</button>
    </form>
    </center>
</body>
</html>