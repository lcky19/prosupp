<?php
require_once 'app/models/Cart.php';

class CartController {
    private $cartModel;

    public function __construct($db) {
        $this->cartModel = new CartController($db);
    }

    public function addToCart($product_id, $quantity) {
        return $this->cartModel->addToCart($product_id, $quantity);
    }

    public function viewCart() {
        return $this->cartModel->viewcart();
    }
}
