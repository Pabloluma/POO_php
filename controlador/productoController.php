<?php
class ProductoController{
    public function __construct() {

    }
    public function listarProducto(){

    }
    public function ejecuta(){
        $productos = $this -> listarProducto();
        require_once('vista/Main.php');
    }
}
