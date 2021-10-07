<?php

declare(strict_types=1);

function catalogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Aple',
            'url'         => 'aple',
            'products'    => [3, 4, 5]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'Samsung',
            'url'         => 'sumsung',
            'products'    => [3, 2, 1]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Xiaomi',
            'url'         => 'xiaomi',
            'products'    => [2, 4, 6]
        ]
    ];
}

function catalogGetProduct(): array
{
    return [

        1 => [
            'product-id' => 1,
            'name' => 'product 1',
            'description' => 'LOrem ipsum',
            'url' => 'product-1',
            'price' => 33.99
        ],

        2 => [
            'product-id' => 2,
            'name' => 'product 2',
            'description' => 'LOrem ipsum',
            'url' => 'product-2',
            'price' => 44
        ],

        3 => [
            'product-id' => 3,
            'name' => 'product 3',
            'description' => 'LOrem ipsum',
            'url' => 'product-3',
            'price' => 55.99
        ],

        4 => [
            'product-id' => 4,
            'name' => 'product 4',
            'description' => 'LOrem ipsum',
            'url' => 'product-4',
            'price' => 66.99
        ],

        5 => [
            'product-id' => 5,
            'name' => 'product 5',
            'description' => 'LOrem ipsum',
            'url' => 'product-5',
            'price' => 77.99
        ],

        6 => [
            'product-id' => 6,
            'name' => 'product 6',
            'description' => 'LOrem ipsum',
            'url' => 'product-6',
            'price' => 88.99
        ],
    ];
}

function catalogGetCategoryProduct(int $categoryId): array
{
    $categories = catalogGetCategory();

    if (!isset($categories[$categoryId])){
        throw new InvalidArgumentException('Category with ID $categoryId does not exist');

    }

    $productsForCategory = [];
    $products = catalogGetProduct();

    foreach ($categories[$categoryId]['products'] as $productId) {
        if (!isset($products[$productId])) {
            throw new InvalidArgumentException('Product with ID $productId  from category $categoryId');
        }

        $productsForCategory[] = $products[$productId];
    }

    return $productsForCategory;
}

function catalogGetCategoryByUrl(string  $url): ?array
{
    $data = array_filter(
        catalogGetCategory(),
        static function ($category) use ($url){
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function catalogGetProductByUrl(string  $url): ?array
{
    $data = array_filter(
        catalogGetProduct(),
         static function ($product) use ($url){
            return $product['url'] === $url;
        }
    );

    return array_pop($data);
}
