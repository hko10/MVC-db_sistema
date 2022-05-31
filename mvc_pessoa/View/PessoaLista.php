<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <title>Lista - Pessoa</title>

<style>
    th,td {
        border: 1px solid black;
        text-align: center;
    }

    p {
        font-family: MS UI Gothic;
        font-size: 2.8rem;
        font-weight: bold;
        margin-top: 0.8em;
        margin-bottom: 1em;
        margin-left: 0;
        color: white;
    }

    th {
        text-shadow: 0px 2px #b59b00;
        padding: 13px;
        font-family: MS UI Gothic;
        font-size: 2.2rem;
        font-weight: 600;
        background-color: #dcbc03;
        color: black;
    }

    td {
        padding-top: 4px;
        padding-bottom: 4px;
        font-size: 2.1rem;
        font-family: 'Square Peg', cursive;
        color: black;
        background-color: #fff;
    }

    a[id="nome"] {
        padding-right: 15px;
        padding-left: 15px;
        color: black;
    }

    a[id="nome"]:hover {
        background-color: #6f9f9c;
        color: white;
        font-weight:bold;
        border-radius: 50px;
    }


    table {
        font-size: 1rem;
        border-collapse: collapse;
    }

    a {
        text-decoration: none;
    }

    span[id="x"] {
        font-family: 'Caveat', cursive;
        font-size: 3rem;
        color: white;
        padding: 0;
    }

    td[id="x"] span {
        padding-right: 11px;
        padding-left: 6px;
    }

    span[id="x"]:hover {
        font-weight:bold;
    }
    
    body {
        margin: 0;
        background-color: var(--bd);
    }
    
    td[id="id"] {
        font-family: 'Noto Serif JP', serif;
        font-size: 1.4rem;
        background-color: var(--id);
        color: black;
        font-weight:bold;
    }

    .arrow {
        float:left;
        display: inline-block;
        margin-top: 2.8em;
        margin-left: 1em;
    }

    .arrow img {
        width: 32px;
    }

    .img {
        float: right;
        display: inline-block;
        margin-top: 3rem;
        
    }

    .img img {
        height: 50em;
    }

    :root {
        --bd: #4d4200;
        --id: #c4a500;
    }
</style>
</head>
<body>
    <div class="arrow">
        <a href="/pessoa/cadastro">
            <img src="https://gcdnb.pbrd.co/images/8dczeX2OQHDp.png?o=1">
        </a>
    </div>
    <div style="margin-left: 2.3em; float:left;">
    <p>Lista de informações pessoais</p>
    <table>
        <tr>
            <th style="background-color: var(--bd); border: none;"></th>
            <th style="background-color: var(--id); text-shadow: 0px 2px #988200;" >ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Data de nascimento</th>
        </tr>

        <!-- $rows no Model. $this->rows = $dao->select() -->
        <?php foreach($model->rows as $item): ?>
        <tr>
            <td id="x" style="background-color: #796700"> <!-- Coluna colocada horizontalmente -->
                <a href="/pessoa/delete?id=<?= $item->id ?>"><span id="x">x</span</a>
            </td>

            <td id="id"><?= $item->id ?></td>

            <td>
                <!-- <a href="[URI]" com id> [$item->nome] </a> -->
                <a href="/pessoa/cadastro?id=<?= $item->id ?>" id="nome"><?= $item->nome ?></a>
            </td>

            <td><?= $item->telefone ?></td>
            <td><?= $item->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
    </div>
    <div class="img">
        <img src="https://static.miraheze.org/projectsekaiwiki/thumb/7/73/Kagamine_Rin.png/1200px-Kagamine_Rin.png">
    </div>
</body>
</html>