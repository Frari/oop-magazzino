<!-- Crea e modellizza classi per gestire i prodotti di un magazzino -->

<?php
class Prodotto{
  public $id;
  public $marca;
  public $prezzo;
  public $peso;
  public $posizionamento;

  function __construct($id, $marca, $prezzo, $peso){
    $this->id = $id;
    $this->marca = $marca;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
  }

  function costoSpedizione($prezzoStartSpedizione){
    return $prezzoStartSpedizione * $this->peso;
  }
}

$prodotto1 = new Prodotto (1, 'Samsung', 500, 200);
$costoSingSpedizione = 2;

$prodotto1->costoSpedizione($costoSingSpedizione);



$prodotto2 = new Prodotto (2, 'Sony', 600, 150);
$costoSingSpedizione = 2;

$prodotto2->costoSpedizione($costoSingSpedizione);


 ?>
