<?php

require_once 'modelo/cliente.php';
require_once 'modelo/proveedor.php';

$clie = new Cliente();
$clie-> Id = '1';
$clie-> NombreApellido = 'Alejandro Villalba';
$clie-> NumeroDeDocumento = '4012165';


$mar =new Marca();
$mar ->Id = '5';
$mar -> Descripcion = 'Raffo';
$mar -> Codigo = '231';

$produ = new Producto();
$produ -> Id ='69';
$produ -> Descripcion= 'Geniol';
$produ -> Codigo ='345';
$produ -> Marca =$mar;

$prove = new Proveedor();
$prove ->Id= '8';
$prove -> NombreApellido= 'Jorge Bolaños';
$prove -> NumeroDeDocumento = '22555733';
$prove -> Producto = $produ;

$clie-> MostrarDatos();
$prove-> MostrarDatos();
