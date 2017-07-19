<?php

namespace Entities;

class LadderData {

    private $data;
    
    public function __construct($file) {
        $this->setData(file_get_contents($file));
    }
    
    
    
    
    public function getObjects() {
        return json_decode($this->getData());
    }

    









    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }


    
}