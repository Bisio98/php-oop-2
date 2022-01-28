<?php
class Scarpe {
    public $marca;

    public $modello;

    public $taglia;

    public $prezzo;

    public function __construct($_marca, $_modello,$_taglia,$_prezzo) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->taglia = $_taglia;
        $this->prezzo = $_prezzo;
    }
}
?>