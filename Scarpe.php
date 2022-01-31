<?php

require_once __DIR__ . '/Basic.php';

class Scarpe {

    use ScarpaBase;

    public $marca;

    public $modello;

    public $taglia;

    public $prezzo;

    public function __construct($_marca, $_modello,$_taglia,$_prezzo,$_colore,$_materiale) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->taglia = $_taglia;
        $this->prezzo = $_prezzo;
        $this->colore = $_colore;
        $this->materiale = $_materiale;
    }
}
?>