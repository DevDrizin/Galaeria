<?php
class Usuarios extends Controller{
    public function cadastrar(){
       $formulario = filter_input_array(INPUT_POST,[
        'nome' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, //para sanitizar entradas como nome, evitando a execução de código malicioso
        'email'=> FILTER_SANITIZE_EMAIL, // para garantir que o email seja válido,
        'senha' => FILTER_DEFAULT,
        'confirmar_senha' =>FILTER_DEFAULT
       ]);

        $this->view('usuarios/cadastrar');
    }//fim da função cadastar
}//fim da classe Usuarios