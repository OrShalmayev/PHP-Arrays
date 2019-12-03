<?php


require('./functions.php');

/** Example #1 **/
// $numbers = [1,23,213,24,34,32];

// $sum = array_sum($numbers);

// echo $sum;


/** Example #2 **/

// function add():int{
//     return array_sum(func_get_args());
// }

// echo add(1,2,3,4);

/** Example #3 **/



/** Example #3 OOP **/
class Item{

    public $price;

    public function __construct()
    {
        $this->price = 0;
    }

    public function setPrice($value):Item{
        $this->price = $value;
        return $this;
    }

    public function getPrice():int{
        return $this->price;
    }

}

class Cart{
    protected $inCart;
    protected $total;

    public function __construct()
    {
        $this->inCart = [];
        $this->total = 0;
    }

    public function addToCart(\Item $item):Cart{
        array_push($this->inCart, $item->getPrice());
        return $this;
    }

    public function getTotal():int{
        return array_sum($this->inCart);
    }
}

$item = (new Item)->setPrice(150);
$cart = (new Cart)->addToCart($item);

echo $cart->getTotal();
