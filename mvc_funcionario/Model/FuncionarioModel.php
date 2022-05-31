<?php

class FuncionarioModel
{
    public $id, $nome, $cargo;

    public $rows;

    public function save()
    {
        include "mvc_funcionario/DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();

        if(empty($this->id))
            $dao->insert($this);
        else
            $dao->update($this);
    }

    public function getAllRows()
    {
        include "mvc_funcionario/DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include "mvc_funcionario/DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        if($obj)
            return $obj;
        else
            return new FuncionarioModel();
    }

    public function delete(int $id)
    {
        include "mvc_funcionario/DAO/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();
        $dao->delete($id);
    }
}