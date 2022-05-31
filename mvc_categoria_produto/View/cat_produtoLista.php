<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600&family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
    <title>Lista - Categoria de produto</title>

<style>
    table {
        font-size: 1rem;
        border-collapse: collapse;
    }

    .container {
        margin-left: 7em;
    }

    th,td {
        border: 1px solid #898989;
        text-align: center;
    }

    td {
        padding: 0.5rem;
        padding-top: 0.2rem;
        padding-bottom: 0.2rem;
        font-family: "Jost", sans-serif;
    }

    td[id="desc"] {
        color: #edb7b7;
    }

    th[id="id_th"] {
        padding: 10px;
        background-color: var(--bd);
    }

    th[id="desc_th"] {
        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;
    }

    th {
        font-family: "Maven Pro", sans-serif;
        font-size: 1.2rem;
    }

    body {
        background-color: #171a1c;
        margin: 0;
    }

    :root {
        --bd: #141618;
    }

    a {
        text-decoration: none;
    }

    th,td  {
        color: white;
    }

    a[id="x"] {
        font-size: 2rem;
        padding-left: 5px;
        padding-right: 5px;
        font-family: 'Fredoka One', cursive;
        color: #565656;
    }

    a[id="x"]:hover {
        color: #edb7b7;
    }

    a[id="desc"] {
        padding: 4px;
        padding-left: 12px;
        padding-right: 12px;
        color: #e8c1c1;
        font-size: 1.1rem;
    }

    a[id="desc"]:hover {
        background-color: #f3adad;
        color: black;
        font-weight: bold;
        border-radius: 25px;
    }

    h2 {
        margin-bottom: 1.5em;
        margin-top: 1em;
        font-family: MS UI Gothic;
        color: white;
    }

    td[id="id_number"] {
        background-color: var(--bd);
    }

</style>
</head>
<body>
    <div class="container">
    <h2>Lista das categorias de produto</h2>
    <table>
        <tr>
            <th></th>
            <th id="id_th">ID</th>
            <th id="desc_th">DESCRIÇÃO</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td> <!-- Coluna colocada horizontalmente -->
                <a href="/cat_produto/delete?id=<?= $item->id ?>" id="x">x</a>
            </td>
            <td id="id_number"><?= $item->id ?></td>
            <td>
                <!-- <a href="[URI] com parâmetro ?id=[id]"> [descricao] </a> -->
                <a href="/cat_produto/cadastro?id=<?= $item->id ?>" id="desc"><?= $item->descricao ?></a>
            </td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="3">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
    </div>
</body>
</html>