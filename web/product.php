<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
<header>
    <a href="">
        <img src="logo.png" alt="{DV.Campus} Logo" WIDTH="200" />
    </a>
    <nav>
        <ul>
            <?php foreach (catalogGetCategory() as $category): ?>
                <li>
                    <a href="/<?= $category['url']?>" ><?= $category['name']?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
    <img src="foto.png" alt="<?= $data['url'] ?>" width="200px">
    <h1><?= $data['name'] ?></h1>
    <p><?= $data['description'] ?></p>
    <span>$<?= $data['price'] ?></span>
    <button type="button">Add To Cart</button>
</main>



</body>
</html>

