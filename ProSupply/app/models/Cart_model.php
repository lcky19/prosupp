<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Cart_model extends Model {
    protected $table = 'carts';

    // Get cart items for a specific user
    public function get_cart_items($user_id) {
        // Assuming $this->db is your PDO database connection
        // Create the SQL query to fetch items from the carts table
        $query = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
        
        // Prepare the query
        $stmt = $this->db->prepare($query);
        
        // Bind the user_id parameter to prevent SQL injection
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        
        // Execute the query
        $stmt->execute();
        
        // Fetch all results as an array of objects
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Add an item to the cart
    public function add_to_cart($data) {
        // Assuming $data contains an associative array with column names and values
        // Prepare the insert query
        $query = "INSERT INTO {$this->table} (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)";
        
        // Prepare the statement
        $stmt = $this->db->prepare($query);
        
        // Bind the parameters to prevent SQL injection
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $data['product_id'], PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $data['quantity'], PDO::PARAM_INT);
        
        // Execute the query and return the result (true if successful, false if failed)
        return $stmt->execute();
    }
}
