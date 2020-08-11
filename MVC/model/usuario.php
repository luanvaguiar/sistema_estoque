<?php

class Usuario {

    private $id_usuario;
    private $nome_usuario;
    private $email;
    private $senha;
    private $tipo_usuario;

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

    public function getTipoUsuario(){
        return $this->tipo_usuario;
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

    public function setTipoUsuario($tipo_usuario){
        $this->tipo_usuario = $tipo_usuario;
    }

    //Métodos do usuário
    public function adicionarUsuario($usuario){
        return true;
    }

    public function getUsuario($id_usuario){
        $usuario = new Usuario();
        return $usuario;
    }

    public function alterarUsuario($usuario){
        return true;
    }

    public function excluirUsuario($usuario){
        return true;
    }

    public function alterarTipoUsuario($ipo_usuario){
        return true;
    }

}

?>