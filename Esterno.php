<?php
  require_once 'Personale.php';
  class Esterno extends Personale {
    protected $mansione_esterno;

    function __construct($_matricola, $_nome, $_cognome, $_sesso, $_mansione_esterno){
      parent::__construct($_matricola, $_nome, $_cognome, $_sesso);
      $this->mansione_esterno = $_mansione_esterno;
    }
  }

?>
