<?php

  class Personale {
    public $nome;
    public $cognome;
    protected $matricola;
    public $sesso;
    protected $eta;

    function __construct($_matricola, $_nome, $_cognome, $_sesso){
      $this->matricola = $_matricola;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->sesso = $_sesso;
    }
    public function setEta($_eta){
      $this->eta = $_eta;
    }

    public function getEta($_eta){
      return $_eta;
    }

    public function calcolaAnniPensione(){
      if($this->sesso == 'M'){
        return 'Andrà in pensione tra: ' . (67 - $this->eta) . ' anni';
      } else {
        return 'Andrà in pensione tra: ' . (65 - $this->eta) . ' anni';
      }
    }
  }

?>
