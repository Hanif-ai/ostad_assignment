<?php
class Product{
    protected $id;
    protected $name;
    protected $price;
    public function __construct(int $id,string $name,float $price){
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
    }
    public function formatePrice(){
        return "Price: $".number_format($this->price,2);
    }
    public function showDetails(){
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "{$this->formatePrice()}";
    }
}

$product  = new Product(1,"T-shirt",19.99);
$product->showDetails();

?>
