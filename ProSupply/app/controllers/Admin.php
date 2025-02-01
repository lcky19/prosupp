<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function products() {
        $this->call->model('Product_model');
        $data['products'] = $this->product_model->get_all_products();
        $this->call->view('admin/products', $data);
    }

    public function add_product() {
        $this->call->model('Product_model');
        $data = [
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'image' => $_POST['image'] // Assume image URL is provided
        ];
        $this->product_model->add_product($data);
        redirect('/admin/products');
    }
}