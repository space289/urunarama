<?php
// Veritabanı bağlantısı
$db = new mysqli('localhost', 'root', '', 'test');
if ($db->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $db->connect_error);
}

// İstek yönlendirme
if (isset($_GET['keyword'])) {
    require_once 'controllers/SearchController.php';

    $searchController = new SearchController($db);
    $searchController->search($_GET['keyword']);
}
?>
