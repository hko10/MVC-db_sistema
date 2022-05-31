<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <title>Lista - Funcionário</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            text-align: center;
            border: 1px solid black
        }

        #st {
            border: none;
            background-color: var(--bd);
            padding: 0;
        }

        th {
            padding: 9px;
            padding-right: 2rem;
            padding-left: 2rem;
            font-size: 2.5rem;
            font-family: var(--fth);
            letter-spacing: 3px;
            color: white;
            background-color: #292f33;
        }

        td {
            font-size: 1.9rem;
            font-family: var(--ftd);
            letter-spacing: 1px;
            padding: 6px;
            color: var(--fdcolor);
            background-color: #384045;
        }

        #nome {
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
            color: var(--fdcolor);
        }

        #nome:hover {
            background-color: var(--bd_nome);
            font-weight: bolder;
            border-radius: 2px;
            color: white;
        }

        body {
            margin: 0;
            background: var(--bd);
        }

        table {
            margin-left: 15em;
            margin-top: 4em;
        }

        :root {
            --bd: #23272a;
            --fth: 'Sawarabi Gothic', sans-serif;
            --ftd: 'Bai Jamjuree', sans-serif;
            --ftd_id: 'Sawarabi Gothic', sans-serif;
            --bd_nome: darkred;
            --fdcolor: #ededed;
        }

        a {
            text-decoration: none;
            color: black;
        }

        #td_x {
            font-size: 2.7rem;
            font-family: 'Quattrocento Sans', sans-serif;
            padding: 0;
            background-color: #292f33;
        }

        #x {
            padding-left: 10px;
            padding-right: 10px;
            color: white;
        }

        #x:hover {
            font-weight: bolder;
        }

        #th_id {
            padding-left: 0.4rem;
            padding-right: 0.4rem;
            background-color: #363d42;
        }

        #td_id {
            font-family: var(--ftd_id);
            font-weight: bolder;
            background-color: #363d42;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th id="st"></th>
            <th id="th_id">ID</th>
            <th class="nome">NOME</th>
            <th>CARGO</th>
        </tr>

        <?php foreach($model->rows as $item): ?>

        <tr>
            
            <td id="td_x">
                <a href="/funcionario/delete?id=<?= $item->id ?>"><span id="x">x</span></a>
            </td>

            <td id="td_id"><?= $item->id ?></td>

            <td>
                <a id="nome" href="/funcionario/cadastro?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->cargo ?></td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="3">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
</body>
</html>