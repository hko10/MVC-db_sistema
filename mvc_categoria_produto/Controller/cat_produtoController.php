<?php

class cat_produtoController {
    
    public static function cadastro()
    {
        include "mvc_categoria_produto/Model/cat_produtoModel.php";
        $model = new cat_produtoModel();

        if(isset($_GET['id'])) // Verificando se já existe uma váriavel $_GET
            $model = $model->getById((int) $_GET['id']); /* Acessando o id no banco de dados
                                                            Adquirindo os registros dos *campos* de um determinado id
                                                            selectById em DAO >> getById em Model */

        include "mvc_categoria_produto/View/cat_produtoCadastro.php";
    }

    public static function lista()
    {
        include "mvc_categoria_produto/Model/cat_produtoModel.php";

        $model = new cat_produtoModel();
        $model->getAllRows(); // Adquirindo todos os registros para $model
                              // Abastecendo $rows

        include "mvc_categoria_produto/View/cat_produtoLista.php";
    }

    // Salvando os dados colocados pelo usuário e mandando-os para o Model
    public static function save()
    {
        include "mvc_categoria_produto/Model/cat_produtoModel.php";

        $model = new cat_produtoModel();

        // Enviando descricao para Model pelo método POST
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /cat_produto/lista");
    }

    public static function delete()
    {
        include "mvc_categoria_produto/Model/cat_produtoModel.php";

        $model = new cat_produtoModel();
        $model->delete((int) $_GET['id']); // Informações dos campos de um determinado id sendo enviados para o método delete

        header("Location: /cat_produto/lista"); // Redirecionando o usuário para a lista caso deletasse algum id
    }
}