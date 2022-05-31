<?php

class PessoaDAO
{
    private $conexao;

    // Conectando ao banco de dados
    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1:3307;dbname=db_sistema";

        // $this é o objeto atual (__construct). $this->conexao é a conexão para com esse objeto
        $this->conexao = new PDO($dsn, "root", "etecjau");
    }

    public function insert(PessoaModel $model)
    {
        // Criando a variável $sql como a mensagem abaixo
        $sql = "INSERT INTO pessoa (nome, telefone, data_nascimento)
        values (?, ?, ?)";

        // prepare($sql) significa o ato de enviar as informações contidas no $sql
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->telefone);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function update(PessoaModel $model)
    {
        $sql = "UPDATE pessoa set nome=?, telefone=?, data_nascimento=? where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->telefone);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();        
    }

    public function select()
    {
        $sql = "SELECT * from pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        // Retorna-se um array com as linhas retornadas dos dados consultados (com select)
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id) // Selecionando especialmente um id
    {
        include_once 'mvc_pessoa/Model/PessoaModel.php';

        $sql = "SELECT * from pessoa where id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        // AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA /pessoa/form?id=<?=%20$item->id%20
        return $stmt->fetchObject("PessoaModel"); // Retornando um objeto específico: PessoaModel
                                                  // /pessoa/form?id=11
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pessoa where id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}