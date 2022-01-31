<?php
require_once __DIR__ . '/Scarpe.php';

class Tacchi extends Scarpe {
    public $tacco;
    public function __construct($_marca, $_modello, $_taglia, $_prezzo,$_colore,$_materiale,$_tacco) {
        parent::__construct($_marca, $_modello,$_taglia, $_prezzo,$_colore,$_materiale);
        $this->tacco = $_tacco;
    }
}
?>