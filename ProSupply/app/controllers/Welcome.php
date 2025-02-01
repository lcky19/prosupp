<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
    public function product() {
        $this->call->model('Product_model');
        $data['products'] = $this->product_model->get_all_products();
        $this->call->view('products', $data);
    }

    public function add_to_cart($product_id) {
        // Assume user_id is 1 for simplicity
        $user_id = 1; 
        $this->call->model('Cart_model');
        $data = [
            'product_id' => $product_id,
            'quantity' => 1,
            'user_id' => $user_id
        ];
        $this->cart_model->add_to_cart($data);
        redirect('/carts');
    }

    public function carts() {
        // Assume user_id is 1 for simplicity
        $user_id = 1; 
        $this->call->model('Cart_model');
        $data['cart_items'] = $this->cart_model->get_cart_items($user_id);
        $this->call->view('carts', $data);
    }
}