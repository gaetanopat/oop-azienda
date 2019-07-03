<?php

  class Personale {
    public $nome;
    public $cognome;
    protected $matricola;
    protected $eta;

    function __construct($_matricola, $_nome, $_cognome){
      $this->matricola = $_matricola;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
    }
    public function setEta($_eta){
      $this->eta = $_eta;
    }

    public function getEta($_eta){
      return $_eta;
    }
  }
?>
