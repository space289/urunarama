<?php
require_once 'models/Product.php';

class SearchController {
    private $productModel;

    public function __construct($db) {
        $this->productModel = new Product($db);
    }

    public function search($keyword) {
        $products = $this->productModel->searchProducts($keyword);
        include 'views/search.php';
    }
}
?>
