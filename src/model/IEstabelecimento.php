<?php

namespace App\model;

interface IEstabelecimento
{
    public function getId();
    public function setId($id);
    public function getRazaoSocial();
    public function setRazaoSocial($razaoSocial);
    public function getNomeFantasia();
    public function setNomeFantasia($nomeFantasia);
    public function getCnpj();
    public function setCnpj($cnpj);
    public function getEmail();
    public function setEmail($email);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getCidade();
    public function setCidade($cidade);
    public function getEstado();
    public function setEstado($estado);
    public function getTelefone();
    public function setTelefone($telefone);
    public function getDataCadastro();
    public function setDataCadastro($dataCadastro);
    public function getCategoria();
    public function setCategoria($categoria);
    public function getStatus();
    public function setStatus($status);
    public function getAgencia();
    public function setAgencia($agencia);
    public function getConta();
    public function setConta($conta); 
}