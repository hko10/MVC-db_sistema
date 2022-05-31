<?php

class FuncionarioController
{
    public static function lista()
    {
        include "mvc_funcionario/Model/FuncionarioModel.php";

        $model = new FuncionarioModel();
        $model->getAllRows();

        include "mvc_funcionario/View/FuncionarioLista.php";
    }

    public static function cadastro()
    {
        include "mvc_funcionario/Model/FuncionarioModel.php";
        $model = new FuncionarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include "mvc_funcionario/View/FuncionarioCadastro.php";
    }

    // Enviando os (dados registrados pelo usuário em Cadastro) para Model
    public static function save()
    {
       include 'mvc_funcionario/Model/FuncionarioModel.php';

       $model = new FuncionarioModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cargo = $_POST['cargo'];

       $model->save();

       header("Location: /funcionario/lista");
    }

    public static function delete()
    {
        include "mvc_funcionario/Model/FuncionarioModel.php";

        $model = new FuncionarioModel();

        $model->delete((int) $_GET['id']);

        header("Location: /funcionario/lista");
    }
}