<?php

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function searchProducts($keyword) {
        $query = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
        $result = $this->db->query($query);

        $products = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }

        return $products;
    }
}
?>
