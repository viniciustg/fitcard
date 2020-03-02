<?php

namespace App;

use PDO;

class EstabelecimentoDAO
{
    private $db;
    private $estabelecimento;

    /**
     * Builder receives instance from the database and estabelecimento
     */
    public function __construct(IConnection $db, model\IEstabelecimento $estabelecimento)
    {
        $this->db = $db->connect();
        $this->estabelecimento = $estabelecimento;
    }

    /**
     * Method to list all 
     */
    public function list()
    {
        try {
            $sql_select = "SELECT * FROM estabelecimento";
            $stmt = $this->db->prepare($sql_select);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Method to listOne all 
     */
    public function listOne($id)
    {
        try {
            $sql_select = "SELECT * FROM estabelecimento WHERE id = $id";
            $stmt = $this->db->prepare($sql_select);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function combo($table)
    {
        try {
            $sql_select = "SELECT * FROM $table";
            $stmt = $this->db->prepare($sql_select);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function filterCity($state)
    {
        try {
            $sql_select = "SELECT * FROM cidade WHERE estado = $state";
            $stmt = $this->db->prepare($sql_select);
            $stmt->execute();
            $row = json_encode($stmt->fetchAll());
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function save()
    {
        $sql_insert = "INSERT INTO estabelecimento(razao_social, nome_fantasia, cnpj, email, endereco, cidade, estado, telefone, data_cadastro, id_categoria, id_status, agencia, conta)
        VALUES(:razao_social, :nome_fantasia, :cnpj, :email, :endereco, :cidade, :estado, :telefone, :data_cadastro, :id_categoria, :id_status, :agencia, :conta)";
        try {
            $stmt = $this->db->prepare($sql_insert);
            //substituimos os parametros do sql pelo conteúdo
            $stmt->bindValue(":razao_social", $this->estabelecimento->getRazaoSocial());
            $stmt->bindValue(":nome_fantasia", $this->estabelecimento->getNomeFantasia());
            $stmt->bindValue(":cnpj", $this->estabelecimento->getCnpj());
            $stmt->bindValue(":email", $this->estabelecimento->getEmail());
            $stmt->bindValue(":endereco", $this->estabelecimento->getEndereco());
            $stmt->bindValue(":cidade", $this->estabelecimento->getCidade());
            $stmt->bindValue(":estado", $this->estabelecimento->getEstado());
            $stmt->bindValue(":telefone", $this->estabelecimento->getTelefone());
            $stmt->bindValue(":data_cadastro", $this->estabelecimento->getDataCadastro());
            $stmt->bindValue(":id_categoria", $this->estabelecimento->getCategoria());
            $stmt->bindValue(":id_categoria", $this->estabelecimento->getCategoria());
            $stmt->bindValue(":id_status", $this->estabelecimento->getStatus());
            $stmt->bindValue(":agencia", $this->estabelecimento->getAgencia());
            $stmt->bindValue(":conta", $this->estabelecimento->getConta());           
            $result = $stmt->execute();   
                   
            return $result;

        } catch (\Throwable $th) {            
            return false;
        }
    }

    public function update()
    {
        $sql_insert = "UPDATE estabelecimento
                          SET razao_social = :razao_social,
                              nome_fantasia = :nome_fantasia,
                              cnpj = :cnpj,
                              email = :email,
                              endereco = :endereco,
                              cidade = :cidade,
                              estado = :estado,
                              telefone = :telefone,
                              data_cadastro = :data_cadastro,
                              id_categoria = :id_categoria,
                              id_status = :id_status,
                              agencia = :agencia,
                              conta = :conta
                        WHERE id = ".$this->estabelecimento->getId()."";
        try {
            $stmt = $this->db->prepare($sql_insert);
            //substituimos os parametros do sql pelo conteúdo
            $stmt->bindValue(":razao_social", $this->estabelecimento->getRazaoSocial());
            $stmt->bindValue(":nome_fantasia", $this->estabelecimento->getNomeFantasia());
            $stmt->bindValue(":cnpj", $this->estabelecimento->getCnpj());
            $stmt->bindValue(":email", $this->estabelecimento->getEmail());
            $stmt->bindValue(":endereco", $this->estabelecimento->getEndereco());
            $stmt->bindValue(":cidade", $this->estabelecimento->getCidade());
            $stmt->bindValue(":estado", $this->estabelecimento->getEstado());
            $stmt->bindValue(":telefone", $this->estabelecimento->getTelefone());
            $stmt->bindValue(":data_cadastro", $this->estabelecimento->getDataCadastro());
            $stmt->bindValue(":id_categoria", $this->estabelecimento->getCategoria());
            $stmt->bindValue(":id_categoria", $this->estabelecimento->getCategoria());
            $stmt->bindValue(":id_status", $this->estabelecimento->getStatus());
            $stmt->bindValue(":agencia", $this->estabelecimento->getAgencia());
            $stmt->bindValue(":conta", $this->estabelecimento->getConta());           
            $result = $stmt->execute();   
                   
            return $result;

        } catch (\Throwable $th) {
            
            return false;
        }
    }

    public function delete(){
        $sql_delete = "DELETE FROM estabelecimento WHERE id=:id";
        try {
            $stmt = $this->db->prepare($sql_delete);
            $stmt->bindValue(":id", $this->estabelecimento->getId());            
            $result = $stmt->execute();
            return $result;

        } catch (\Throwable $th) {            
            return false;
        }
    }
}
