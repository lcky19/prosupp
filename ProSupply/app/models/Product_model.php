<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model {
    protected $table = 'products';

    public function get_all_products() {
        return $this->all();
    }

    public function add_product($data) {
        return $this->insert($data);
    }
}