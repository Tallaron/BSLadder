<?php

namespace Entities;

class LadderData {

    private $data;
    private $class;

    /**
     * Sets $key as $this->class. Also tries to get JSON data according to $key
     * and several global constants. To avoid problems with redirecting
     * @param string $key
     */
    public function __construct($key, $realm, $season, $hardcore, $index) {
        $this->setClass($key);
        $context = stream_context_create(
                        array(
                            'http' => array(
                                'follow_location' => false
                                            )
                            )
                    );
        $this->setData(
            file_get_contents(  // calls d3.tallaron.de to receive json data
                sprintf(JSON_URL_PATTERN, $realm, $season, $hardcore, $index, $this->getClass()), false, $context));
    }
    
    /**
     * Returns an array of StdObject containing the JSON data.
     * @return array
     */
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
