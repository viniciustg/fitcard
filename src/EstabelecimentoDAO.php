<?php

namespace App;

class EstabelecimentoDAO
{
    private $db;
    private $estabelecimento;

    public function __construct(IConnection $db, model\IEstabelecimento $estabelecimento)
    {
        $this->db = $db->connect();
        $this->estabelecimento = $estabelecimento;
    }

    public function list()
    {
        $sql_select = "SELECT * FROM estabelecimento";
        $stmt = $this->db->prepare($sql_select);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
}