<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Models/Clientes.php';

class ClientesController{

    public function index(){
        $clientes = new Clientes();
        $clientes->All();
        return $clientes;
    }
}

?>