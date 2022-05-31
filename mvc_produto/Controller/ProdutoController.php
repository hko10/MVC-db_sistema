<?php

class ProdutoController {

    public static function form() {
        include "mvc_produto/Model/ProdutoModel.php";
        $model = new ProdutoModel();

        // Verificando se já existe uma váriavel $_GET
        if(isset($_GET['id']))                              
            $model = $model->getById((int) $_GET['id']); /* Acessando o id no banco de dados
                                                            Adquirindo os registros dos *campos* de um determinado id
                                                            selectById em DAO >> getById em Model */

        include "mvc_produto/View/ProdutoCadastro.php";
    }
    
    public static function lista() {
        include "mvc_produto/Model/ProdutoModel.php";

        $model = new ProdutoModel();
        $model-> getAllRows(); // Obtendo todos os registros e assim abastecendo $rows

        include "mvc_produto/View/ProdutoListar.php";
    }

    // Controller ENVIA os dados colocados pelo usuário para Model
    public static function save() {
        include "mvc_produto/Model/ProdutoModel.php";

        // Enviando dados para Model pelo método POST
        $model = new ProdutoModel();
        $model->id = $_POST["id"];
        $model->nome = $_POST["nome"];
        $model->preco = $_POST["preco"];
        $model->descricao = $_POST["descricao"];

        $model -> save();

        header("Location: /produto/lista");
    }

    public static function delete()
    {
        include "mvc_produto/Model/ProdutoModel.php";

        $model = new ProdutoModel();
        $model->delete((int) $_GET['id']);

        header("Location: /produto/lista");

    }
}