<?php

class Usuario {

    private $id_usuario;
    private $nome_usuario;
    private $email;
    private $senha;

    // Getters
    public function getId_Usuario(){
        return $this->id_usuario;
    }

    public function getNome_Usuario(){
        return $this->nome_usuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    //Setters
    public function setId_Usuario($id){
        $this->id_usuario = $id;
    }

    public function setNome_Usuario($nome){
        $this->nome_usuario = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

}

?>