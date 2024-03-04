<?php

namespace App\Services;

use App\Core\Database\DatabaseInterface;
use App\Models\Products;


class ProductService
{

    public function __construct(
        private DatabaseInterface $db
    ) {
    }

    /** @return array <Products> */
    public function showProducts(): array
    {
        $products = $this->db->getProducts('productsList');

        $newArr = [];

        foreach ($products as $product) {
            $newProduct = new Products();
            $newProduct->setSku($product['sku']);
            $newProduct->setPrice($product['price']);
            $newProduct->setName($product['name']);
            $newProduct->setSize($product['size']);
            $newProduct->setWeight($product['weight']);
            $newProduct->setHeight($product['height']);
            $newProduct->setWidth($product['width']);
            $newProduct->setLength($product['length']);;
            $newArr[] = $newProduct;
        }

        return $newArr;
    }


    public function destroy(string $sku): void
    {
        $this->db->deleteProducts('productsList', [
            'sku' => $sku,
        ]);
    }
}
