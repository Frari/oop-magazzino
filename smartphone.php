<?php
require_once 'prodotto.php';

class Smartphone extends Prodotto {
  public $Nome_modello;
  public $Vel_processore;
  public $Ram;
  public $HardDisk;
  public $dimensioni_schermo;

  function vel_apparato(){
    return $this->Vel_processore * $this->Ram;
  }

  function __construct($id, $marca, $prezzo, $peso, $Nome_modello){
    parent::__construct($id, $marca, $prezzo, $peso);
    $this->Nome_modello = $Nome_modello;
  }
}

$Smartphone1 = New Smartphone(3, 'Apple', 1000, 100, 'Iphone X');
$Smartphone1->Vel_processore = 1.8;
$Smartphone1->Ram = 8;
// echo '<pre>';
// var_dump($Smartphone1);
// echo '</pre>';
$Smartphone1->vel_apparato($Vel_processore, $Ram);
 ?>
