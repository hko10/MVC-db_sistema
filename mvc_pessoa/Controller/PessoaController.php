<?php

class PessoaController
{
    // Define a função que colocará o path do PessoaForm.php no index.php
    public static function form()
    {
        include 'mvc_pessoa/Model/PessoaModel.php';
        $model = new PessoaModel();

        if(isset($_GET['id'])) // Verificando se já existe uma váriavel $_GET
            $model = $model->getById((int) $_GET['id']);    /* Acessando o id no banco de dados
                                                            Adquirindo os registros dos *campos* de um determinado id
                                                            selectById em DAO >> getById em Model */

        include 'mvc_pessoa/View/PessoaCadastro.php';
    }

    public static function lista()
    {
        include 'mvc_pessoa/Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows(); // Obtendo todos os registros e assim abastecendo $rows

        include 'mvc_pessoa/View/PessoaLista.php';
    }

    // Controller ENVIA os dados colocados pelo usuário para Model
    public static function save()
    {
        include 'mvc_pessoa/Model/PessoaModel.php';

        $model = new PessoaModel();

        // Enviando dados para Model pelo método POST
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->telefone = $_POST['telefone'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa/lista");
    }

    public static function delete()
    {
        include 'mvc_pessoa/Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->delete((int) $_GET['id']); // Trazendo a varíavel $_GET como inteiro para delete
                                        // Informações dos campos de um determinado id sendo enviados para o método delete

        header("Location: /pessoa/lista"); // Redirecionando o usuário para a lista caso deletasse algum id
    }
}