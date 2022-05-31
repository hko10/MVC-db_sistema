<?php

class FuncionarioDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1:3307;dbname=db_sistema";

        $this->conexao = new PDO($dsn, "root", "etecjau");
    }


    public function insert(FuncionarioModel $model)
    {
        $sql = "INSERT INTO funcionario (nome, cargo) VALUES (?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * from funcionario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once "mvc_funcionario/Model/FuncionarioModel.php";

        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, cargo=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}