<?php

class Cliente{
    public $Id;
    public $NombreApellido;
    public $NumeroDeDocumento;

    public function MostrarDatos()
{
    echo 'El Id del cliente es: '. $this->Id.'<br>';
    echo 'El nombre y apellido del cliente es: '. $this->NombreApellido.'<br>';
    echo 'El DNI del cliente es: '. $this->NumeroDeDocumento.'<br>';
}
}

