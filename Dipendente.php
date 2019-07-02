<?php
  require_once 'Personale.php';
  class Dipendente extends Personale {
    protected $categoria_dipendente;

    function __construct($_matricola, $_nome, $_cognome, $_categoria_dipendente){
      parent::__construct($_matricola, $_nome, $_cognome);
      $this->categoria_dipendente = $_categoria_dipendente;
    }
  }
?>
