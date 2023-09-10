<?php

use Adianti\Database\TRecord;

class Especialidade extends TRecord {
    
    public function __construct($id = NULL, $callObjectLoad = TRUE) {
        parent::__construct($id, $callObjectLoad);
        
        parent::addAttribute('descricao');
    }
}
