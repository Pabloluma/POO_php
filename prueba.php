<?php
require_once 'cliente.php';
include_once 'productoFisico.php';

$c1 = new Cliente("Pablo");
$c2 = new Cliente("Marta");

$productoFisico = new ProductoFisico("Telefono", 1000, 0.5);
echo "Nombre:" . $productoFisico->getNombre() . ", Precio: " . $productoFisico->getPrecio() . ", Peso: " . $productoFisico->calculaPrecioFinal();
?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
</ol>