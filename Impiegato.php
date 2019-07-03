<?php
  require_once 'Dipendente.php';
  class Impiegato extends Dipendente {
    protected $compito_specifico;

    function __construct($_matricola, $_nome, $_cognome, $_sesso, $_categoria_dipendente, $_compito_specifico){
      parent::__construct($_matricola, $_nome, $_cognome, $_sesso, $_categoria_dipendente);
      $this->compito_specifico = $_compito_specifico;
    }
  }

?>
