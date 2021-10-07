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
    <section>
        <h1><?= $data['name']?></h1>
        <div class="product-list">
            <?php foreach (catalogGetCategoryProduct($data['category_id']) as $product) : ?>
                <div>
                    <a href="<?= $product['url'] ?>" title="<?=$product['name'] ?>"> aaa
                        <img src="foto.png" alt="<?= $data['url'] ?>" width="200px">
                    </a>
                    <a href="<?= $product['url'] ?>" title="<?=$product['name'] ?>"><?= $product['name'] ?></a>
                    <span>$<?= number_format($product['price'], 2) ?></span>
                    <button type="button">Add To Cart</button>
                </div>
            <?php endforeach; ?>

        </div>


    </section>

</main>



</body>
</html>
