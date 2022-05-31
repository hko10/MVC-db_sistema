<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lato&display=swap" rel="stylesheet">
    <title>Lista - Produto</title>

<style>
    body {
        margin: 0;
        background-color: var(--bd);
    }

    :root {
        --font: "Lato", sans-serif;
        --bd: #f5f5f5;
    }

    th {
        border: 1px solid black;
        letter-spacing: 1.5px;
        border-bottom: 1px solid black;
        background-color: #e59898;
        font-size: 1.2rem;
        font-family: var(--font);
        padding-left: 20px;
        padding-right: 20px;
    }

    th[id="first"] {
        background-color: var(--bd);
        border: none;
    }

    td {
        border: 1px solid black;
        background-color: white;
        font-family: "Indie Flower", cursive;
        font-size: 1.5rem;
        padding-left: 15px;
        padding-right: 15px;
    }

    h1 {
        font-family: MS UI Gothic;
        font-size: 1.8rem;
        margin-bottom: 1em;
        margin-top: 1.8em;
        text-transform: uppercase
    }

    td[id="id"] {
        font-family: var(--font);
        background-color: #ffcaca;
        border: 1px solid black;
        font-size: 1.1rem;
        padding-left: 5px;
        padding-right: 5px;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th[id="id"] {
        background-color: #ffd4d4;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a[id="nome"] {
        padding-left: 15px;
        padding-right: 15px;
    }

    a[id="nome"]:hover {
        background-color: #cb9090;
        color: white;
        font-weight: bold;
        border-radius: 50px;
    }

    td[id="x"] {
        background-color: white;
        padding-bottom: 0;
        padding-top: 0;
    }

    td[id="x"] span {
        font-size: 2.2rem;
    }

    td[id="x"] span:hover {
        font-weight: bold;
    }
</style>
</head>
<body>
    <div style="margin-left: 7em;">
    <h1>Listagem de produtos</h1>
    <table style="border-collapse: collapse;">
        <tr>
            <th id="first"></th>
            <th id="id">ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
        </tr>

        <!-- $rows do Model. $this->rows = $dao->select() -->
        <?php foreach($model->rows as $item): ?>
        <tr>
            <td id="x">
                <a href="/produto/delete?id=<?= $item->id ?>"><span>x</span></a>
            </td>
            <td id="id"><?= $item->id ?></td>
            <td>
                <a href="/produto/cadastro?id=<?= $item->id ?>" id="nome"><?= $item->nome ?></a>
            </td>
            <td><?= $item->preco ?></td>
            <td><?= $item->descricao ?></td>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>

    </div>
</body>
</html>