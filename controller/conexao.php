<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao
 *
 * @author Camila_Camera
 */
class conexao {
    //put your code here
    private $bdHost = 'localhost';
    private $bdUser = 'root';
    private $bdPass = '';
    private $schema = 'dev3n201';
    
    public function getConexao(){
        return $con = mysqli_connect($this->bdHost, $this->bdUser, $this->bdPass, $this->schema);
    }
    
    public function closeConexao(){
        mysqli_close($this->getConexao());
    }
}
