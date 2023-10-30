<?php

class ArrayManipulator {
    private $data = [];


    public function __get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return null;
        }
    }


    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __isset($key) {
        return isset($this->data[$key]);
    }


    public function __unset($key) {
        if (isset($this->data[$key])) {
            unset($this->data[$key]);
        }
    }


    public function __toString() {
        return json_encode($this->data);
    }


    public function __clone() {
        $this->data = array_map(function($value) {
            return is_object($value) ? clone $value : $value;
        }, $this->data);
    }
}


$obj = new ArrayManipulator();


$obj->property1 = "Value 1";
$obj->property2 = "Value 2";


echo "property1: " . $obj->property1 . "\n"; 


echo "property2 létezik: " . (isset($obj->property2) ? "Igen" : "Nem") . "\n"; // Kiírja: "property2 létezik: Igen"


unset($obj->property2);
echo "property2 létezik: " . (isset($obj->property2) ? "Igen" : "Nem") . "\n"; // Kiírja: "property2 létezik: Nem"


echo "Objektum tartalma: " . $obj . "\n"; // Kiírja az objektum tartalmát

$clone = clone $obj;
$clone->property1 = "Modified Value 1";
echo "Eredeti objektum property1: " . $obj->property1 . "\n";
