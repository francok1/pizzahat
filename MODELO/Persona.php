<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author franc
 */
abstract class Persona {
    private string $nombre;
    private int $telefono;
    
    protected function __construct(string $nombre, int $telefono) {
        $this->setnombre($nombre);
        $this->setTelefono($telefono);
    }

    function getNombre(): string {
        return $this->nombre;
    }

    function getTelefono(): int {
        return $this->telefono;
    }

    function setNombre(string $nombre): void {
        if(isset($nombre)){
            if(strlen($nombre) > 2 && strlen($nombre) <= 50){
        $this->nombre = $nombre;
          }
        }  
    }

    function setTelefono(int $telefono): void {
        if(isset($telefono)){
            if(strlen($telefono) == 9){}
            $this->telefono = $telefono;
        }
        
    }


}
