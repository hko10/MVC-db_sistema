<?php

class cat_produtoModel {
    // Declarando as variáveis
    public $id, $descricao;

    public $rows;

    // Manipulando os dados com o método save() que serão enviados para DAO
    public function save()
    {
        include "mvc_categoria_produto/DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        // Verificando se id foi preenchido
        if(empty($this->id)) // USE $THIS AQUI!
        {
            $dao->insert($this); // Se não existe um id, é óbvio que vai inserir novos registros ao banco de dados
        } else {
            $dao->update($this); // Se já existe um id salvo no banco de dados (DAO), o model passa a ser atualizado
        }
    }

    // Adquire todos os campos com os registros do banco de dados
    // Poderemos listar os registros com esse método
    public function getAllRows()
    {
        include "mvc_categoria_produto/DAO/cat_produtoDAO.php";
        $dao = new cat_produtoDAO();

        $this->rows = $dao->select(); // Abastece $rows com o select dos registros provindos do MySQL
    }

    // Método que recebe id do registro de tipo inteiro
    public function getById(int $id)
    {
        include "mvc_categoria_produto/DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new cat_produtoModel();

        /* se ($obj) diferente de False
        if ($obj)
        {
            return $obj;
        } else {
            return new cat_produtoModel();
        }
        */
    }

    // Cria-se um método para deletar os registros do MySQL via camada DAO.
    public function delete(int $id)
    {
        include "mvc_categoria_produto/DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        $dao->delete($id);
    }
}