<?php

class ProdutoDAO {
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1:3307;dbname=db_sistema";

        // $this é o objeto atual (__construct). $this->conexao é a conexão para com esse objeto
        $this->conexao = new PDO($dsn, "root", "etecjau");
    }

    public function insert(ProdutoModel $model) {
        // Criando a variável $sql como a mensagem abaixo
        $sql = "INSERT INTO produto (nome, preco, descricao)
        values (?, ?, ?)";
        // prepare($sql) significa o ato de enviar as informações contidas no $sql
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);

        $stmt->execute();
    }

    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto set nome=?, preco=?, descricao=? where id=?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }

    // Consultando os dados no banco de dados
    public function select() {
        $sql = "SELECT * FROM produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_CLASS);
    }

    public function selectById(int $id) // Selecionando especialmente um id
    {
        include_once "mvc_produto/Model/ProdutoModel.php";

        $sql = "SELECT * FROM produto where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE from produto where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}