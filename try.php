<?php

class MyClass {
    //
    private $prop;

    public function __construct($value) {
        $this->prop = $value;
    }

    public function getProperty() {
        return $this->prop;
    }
}

$obj = new MyClass("Hello");
echo $obj->getProperty(); // "Hello"を出力

echo "こんにチーーーーは";
?>
