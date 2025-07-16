<?php

interface IMaintenance {
    public function performMaintenance();
}

abstract class PeralatanIT {
    public function __construct(
        public string $id,
        public string $brand,
        public string $model
    ) {}
    public function getInfo() {
        return "{$this->id} | {$this->brand} | {$this->model}";
    }
}

class Laptop extends PeralatanIT implements IMaintenance {
    public function __construct($id, $brand, $model, public string $storage) {
        parent::__construct($id, $brand, $model);
    }
    public function performMaintenance() {
        return "Laptop OK |{$this->storage}|";
    }
}

class PC extends PeralatanIT implements IMaintenance {
    public function __construct($id, $brand, $model, public string $cpu) {
        parent::__construct($id, $brand, $model);
    }
    public function performMaintenance() {
        return "PC OK |{$this->cpu}|";
    }
}

class Printer extends PeralatanIT implements IMaintenance {
    public function __construct($id, $brand, $model, public string $type) {
        parent::__construct($id, $brand, $model);
    }
    public function performMaintenance() {
        return "Printer OK |{$this->type}|";
    }
}

$alat = [
    new Laptop('Laptop1', 'Dell', 'XPS', 'SSD'),
    new PC('Printer1', 'HP', 'Elite', 'Ultra7'),
    new Printer('PRinter1', 'Canon', 'Pixma', 'Inkjet')
];

echo "INHERITANCE\n";
foreach ($alat as $a) echo $a->getInfo() . PHP_EOL;
echo "ABSTRACTION\n";
foreach ($alat as $a) echo $a->performMaintenance() . PHP_EOL;
