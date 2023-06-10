<!DOCTYPE html>
<html>
<head>
    <title>Ürün Arama</title>
</head>
<body>
    <h1>Ürün Arama</h1>

    <form method="GET" action="index.php">
        <input type="text" name="keyword" placeholder="Anahtar Kelime">
        <button type="submit">Ara</button>
    </form>

    <?php if (!empty($products)): ?>
        <h2>Sonuçlar:</h2>
        <ul>
            <?php foreach ($products as $product): ?>
                <li><?php echo $product['name']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
