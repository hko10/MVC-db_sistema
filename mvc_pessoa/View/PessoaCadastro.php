<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro - Pessoa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    :root {
        --font: MS UI Gothic;
        --b_color: #fbfb51;
        --b_color2: #ffff26;
    }

    input {
        margin-bottom: 1.5rem;
        font-size: 16px;
        height: 2rem;
        width: 15rem;
        padding: 6px;
        padding-left: 10px;
        border: 1px solid #bebebe;
        border-radius: 12px;
        font-family: Helvetica;
        outline: none;
    }

    input:focus {
        box-shadow:0 0 6px 0 var(--b_color);
    }

    input[id="data_nasc_id"] {
        width: 7em;
        padding-left: 2px;
        display: inline-block;
    }

    label[for="data_nascimento"] {
        display: inline-block;
        margin-right: 5px;
    }

    body {
        background-color: #1f2023;
        margin: 0;
    }

    label {
        font-family: var(--font);
        font-size: 1.2em;
        margin-bottom: 7px;
    }

    label, input {
        display:block;
    }
    
    button {
        margin-top: 3rem;
        font-family: var(--font);
        font-size: 18px;
        border: 5px solid var(--b_color);
        border-radius: 50px;
        width: 10em;
        background-color: var(--b_color);
        margin-bottom: 5em;
        color: black;
        display: block;
        padding: 5px;
        font-weight: bold;
    }

    button:hover {
        color: black;
        border: 5px solid var(--b_color2);
        background-color: var(--b_color2);
        font-weight: bold;
    }
    h2 {
        font-family: var(--font);
        margin-bottom: 0.8rem;
        font-size: 3.5rem;
    }

    h3 {
        font-family: var(--font);
        font-size: 1.3rem;
        margin: 0;
        margin-bottom: 2rem;
    }

</style>
</head>
<body>
<center>
<div style="color: white;">
    <h2>Cadastro</h2>
    <h3>Por favor, preencha os campos abaixo.</h3>
    <form action="/pessoa/save" method="post">
        
        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <input name="nome" id="nome_id" value="<?= $model->nome ?>" type="text" placeholder="Nome" />

        <input name="telefone" id="tel_id" value="<?= $model->telefone ?>" type="number" placeholder="Telefone" />

        <label for="data_nascimento">Data de nascimento:</label>
        <input name="data_nascimento" id="data_nasc_id" value="<?= $model->data_nascimento ?>" type="date" />
        
        <button type="submit">Enviar</button>
    </form>
</div>
</center>

</body>
</html>