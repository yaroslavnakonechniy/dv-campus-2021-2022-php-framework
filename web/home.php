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



</body>
</html>

