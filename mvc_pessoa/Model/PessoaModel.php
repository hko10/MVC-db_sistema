<?php

class PessoaModel
    {
        // Declarando variáveis
        public $id, $nome, $telefone, $data_nascimento;

        public $rows;

        public function save() // Model adquirindo os dados enviados pelo Controller
        // Iniciando o processo em que os dados são inseridos no banco de dados
        {
            include 'mvc_pessoa/DAO/PessoaDAO.php'; // Chamando o DAO

            // A váriavel $dao vai conter informações da PessoaDAO.
            $dao = new PessoaDAO();

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
        public function getAllRows()
        {
            include 'mvc_pessoa/DAO/PessoaDAO.php';

            $dao = new PessoaDAO();

            $this->rows = $dao->select(); // Abastece $rows com o select dos registros provindos do MySQL
                                          // Declarando a função select() do DAO 
        }

        public function getById(int $id)
        {
            include 'mvc_pessoa/DAO/PessoaDAO.php';

            $dao = new PessoaDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new PessoaModel();

            /* if($obj)
            {
                return $obj;
            } else
            {
                return new PessoaModel();
            }

            */
        }

        // Cria-se um método para deletar os registros do MySQL via camada DAO.
        public function delete(int $id)
        {
            include 'mvc_pessoa/DAO/PessoaDAO.php';

            $dao = new PessoaDAO();

            $dao->delete($id);
        }
    }