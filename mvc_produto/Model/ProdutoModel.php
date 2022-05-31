<?php

class ProdutoModel {
    public $id, $nome, $preco, $descricao;

    public $rows;

    // Chama-se a função save() do Controller no Model
    public function save() {
        include "mvc_produto/DAO/ProdutoDAO.php";

        $dao = new ProdutoDAO();

        if(empty($this->id))
            {
                $dao->insert($this); // Se caso não exista um id, seria possível, obviamente, fazer o insert.
                                     // Declarando a função insert do DAO
            }
            else {
                $dao->update($this); // Update se caso exista um id.
                                     // Percebe-se que não há mais alguma forma de fazer o insert, logo,
                                     // se quisermos "fazer o insert" novamente, devemos editar o registro,
                                     // logo, update.

                                     // Declara-se o método update() do DAO.
            }
    }

    // Adquire todos os campos com os registros do banco de dados
    // Poderemos listar os registros com esse método
    public function getAllRows() {
        include "mvc_produto/DAO/ProdutoDAO.php";

        $dao = new ProdutoDAO;

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include "mvc_produto/DAO/ProdutoDAO.php";
        $dao = new ProdutoDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel();

        /* if($obj)
        {
            return $obj;
        } else
        {
            return new ProdutoModel();
        }

        */
    }

    // Cria-se um método para deletar os registros do MySQL via camada DAO.
    public function delete(int $id)
    {
        include "mvc_produto/DAO/ProdutoDAO.php";

        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}