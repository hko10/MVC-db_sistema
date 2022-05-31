<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <title>Cadastro - Funcionário</title>

    <style>
        body {
            margin: 0;
            background-color: #20362a;
        }

        * {
            color: white;
        }
        
        form {
            margin-top: 4em;
        }

        input {
            margin-bottom: 1.2rem;
            font-size: 1.7rem;
            height: 4rem;
            width: 10em;
            padding: 6px;
            padding-left: 15px;
            border: 1px solid #bebebe;
            border-radius: 30px;
            font-family: 'Indie Flower', cursive;
            outline: none;
            border: 1.5px solid #23b033;
            color: black;
        }

        input[name="cargo"] {
            margin-bottom: 0;
        }

        button {
            margin-top: 4em;
        }

        h1 {
            margin-top: 2em;
            font-family: 'Shadows Into Light Two', cursive;
            font-size: 3.6em;
            letter-spacing: 6px;
            text-shadow: 1px 2px #23b033;
        }
    </style>
</head>
<body>
    <center>
    <h1>Cadastro de funcionário :)</h1>
    <form method="post" action="/funcionario/save">
        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <input name="nome" value="<?= $model->nome ?>" type="text" placeholder="Nome" />
        <br><br>

        <input name="cargo" value="<?= $model->cargo ?>" type="text" placeholder="Cargo" />
        <br>

        <button type="submit" class="btn btn-light">Enviar</button>
    </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>