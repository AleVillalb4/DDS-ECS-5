<?php

require_once 'producto.php';

class Proveedor{
    public $Id;
    public $NombreApellido;
    public $NumeroDeDocumento;
    public $Producto;

    public function MostrarDatos()
    {
        echo 'El Id del proveedor es: '. $this->Id.'<br>';
        echo 'El nombre y apellido del proveedor es: '. $this->NombreApellido.'<br>';
        echo 'El DNI del proveedor es: '. $this->NumeroDeDocumento.'<br>';
        echo 'El Id del producto es: '. $this->Producto->Id.'<br>';
        echo 'La descripcion del producto es: '. $this->Producto->Descripcion.'<br>';
        echo 'El Codigo del producto es: '. $this->Producto->Codigo.'<br>';
        echo 'El Id de la marca es: '. $this->Producto->Marca->Id.'<br>';
        echo 'La descripcion de la marca es: '. $this->Producto->Marca->Descripcion.'<br>';
        echo 'El código de la marca es: '. $this->Producto->Marca->Codigo.'<br>';
    }
 }