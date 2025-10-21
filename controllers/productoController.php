<?php

class productoController{
    public function index(){
        $producto = new Producto();
        $productos = $producto->getRandom(6);

        require_once 'views/productos/destacados.php';
    }
}