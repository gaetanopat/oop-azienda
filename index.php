<?php
  require 'Dirigente.php';
  require 'Quadro.php';
  require 'Impiegato.php';
  require 'Operaio.php';
  require 'Esterno.php';


  $dipendente1 = new Dipendente('0011', 'Mario', 'Rossi', 'M', 'Impiegato');
  $dipendente1->setEta(35);
  $pensione1 = $dipendente1->calcolaAnniPensione();

  $dipendente2 = new Dipendente('0012', 'Gaia', 'Verdi', 'F', 'Operaia');
  $dipendente2->setEta(26);
  $pensione2 = $dipendente2->calcolaAnniPensione();

  $esterno1 = new Esterno('1234', 'Mario', 'Giallo', 'M', 'Compito');
  $esterno1->setEta(25);
  $pensione3 = $esterno1->calcolaAnniPensione();

  $impiegato1 = new Impiegato('2132', 'Angelo', 'Neri', 'M', 'Impiegato', 'Compito_impiegato');
  $impiegato1->setEta(30);
  $pensione4 = $impiegato1->calcolaAnniPensione();

  echo '<pre>';
  var_dump($dipendente1);
  var_dump($pensione1);
  echo '<br>';
  var_dump($dipendente2);
  var_dump($pensione2);
  echo '<br>';
  var_dump($esterno1);
  var_dump($pensione3);
  echo '<br>';
  var_dump($impiegato1);
  var_dump($pensione4);
  echo '</pre>';
?>
