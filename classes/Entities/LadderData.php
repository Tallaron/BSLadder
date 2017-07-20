<?php

namespace Entities;

class LadderData {

    private $data;
    private $class;


    public function __construct($file) {
        $context = stream_context_create(
                        array(
                            'http' => array(
                                'follow_location' => false
                                            )
                            )
                    );
        $this->setData(file_get_contents($file, false, $context));
    }
    
    
    
    
    public function getObjects() {
        return json_decode($this->getData());
    }

    







    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    
    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }


    
}
