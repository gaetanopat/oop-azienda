<?php
  require 'Dirigente.php';
  require 'Quadro.php';
  require 'Impiegato.php';
  require 'Operaio.php';
  require 'Esterno.php';


  $dipendente1 = new Dipendente('0011', 'Mario', 'Rossi', 'Impiegato');
  $dipendente1->setEta(35);
  $dipendente2 = new Dipendente('0012', 'Gaia', 'Verdi', 'Operaia');
  $dipendente2->setEta(26);
  $esterno1 = new Esterno('1234', 'Mario', 'Giallo', 'Compito');
  $esterno1->setEta(25);
  $impiegato1 = new Impiegato('2132', 'Angelo', 'Neri', 'Impiegato', 'Compito_impiegato');
  $impiegato1->setEta(30);
  echo '<pre>';
  var_dump($dipendente1);
  var_dump($dipendente2);
  var_dump($esterno1);
  var_dump($impiegato1);
  echo '</pre>';
?>
