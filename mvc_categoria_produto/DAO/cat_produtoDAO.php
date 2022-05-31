<?php

class cat_produtoDAO {
    private $conexao;

    // Interagindo com o PDO
    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1:3307;dbname=db_sistema";

        // $this é o objeto atual (__construct). $this->conexao é a conexão para com esse objeto
        $this->conexao = new PDO($dsn, "root", "etecjau");
    }

    // Inserindo os dados do Model para o banco de dados
    public function insert(cat_produtoModel $model)
    {
        // Criando a variável $sql como a mensagem abaixo
        $sql = "INSERT INTO categoria_produto (descricao) values (?)";

        // prepare($sql) significa o ato de enviar as informações contidas no $sql
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }

    public function update(cat_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        // Retorna um array com os registros consultados
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id) // Selecionando especialmente um id
    {
        include_once "Model/cat_produtoModel.php";

        $sql = "SELECT * FROM categoria_produto WHERE id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        // AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA /cat_produto/cadastro?id=<?=%20$item->id%20
        return $stmt->fetchObject("cat_produtoModel"); // Retornando o objeto cat_ProdutoModel
                                                       // /cat_produto/cadastro?id=11
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}