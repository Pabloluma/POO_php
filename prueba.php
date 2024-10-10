<?php
require_once 'cliente.php';
$c1 = new Cliente("Pablo");
$c2 = new Cliente("Marta");
?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
</ol>