<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author Alberto Ortiz Acevedo <aortizsm@gmail.com>
 */
class Producto {
    private $id;
    private $nombre;
    
    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
    
    public function create() {
        return "Producto creado en el sistema";
    }
}
