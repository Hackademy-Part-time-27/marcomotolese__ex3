
<?php

class Car {
    private $num_telaio;

    public function __construct($num_telaio) {
        $this->num_telaio = $num_telaio;
    }

    public function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($num_telaio, $license, $name) {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function printInfoCar() {
        echo "La mia macchina e' {$this->name}, con targa {$this->license} e numero di Telaio {$this->getNumTelaio()}\n";
    }
}
$car = new Fiat("1234", "ND 123 OJ", "Fiat");
$car->printInfoCar();

var_dump($car);