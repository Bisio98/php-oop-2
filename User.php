<?php

class User {
    public $nome;

    public $cognome;

    protected $carrello = [];

    public function __construct($_nome, $_cognome) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }

    public function aggiungiProdotto($prodotto) {
        $this->carrello[] = $prodotto;
    }

    public function getCarrello() {
        return $this->carrello;
    }

    public function getFullName() {
        return $this->nome . ' ' . $this->cognome;
    }
}
?>