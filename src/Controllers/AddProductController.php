<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class AddProductController extends Controller
{

    public function create(): void
    {
        $this->view(name: '/add-product', title: 'Product Add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'sku' => ['required', 'min:3', 'max:50'],
            'name' => ['required', 'min:3', 'max:50'],
            'price' => ['required'],
            'product_type' => ['typeswitcher'],
            'size' => ['size'],
            'weight' => ['weight'],
            'height' => ['height'],
            'width' => ['width'],
            'length' => ['length'],


        ]);



        if (!$validation) {

            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/add-product');
        }


        $this->db()->insertProducts('productsList', [
            'sku' => $this->request()->input('sku'),
            'name' => $this->request()->input('name'),
            'price' => $this->request()->input('price'),
            'product_type' => $this->request()->input('product_type'),
            'size' => $this->request()->input('size') ?: null,
            'weight' => $this->request()->input('weight') ?: null,
            'height' => $this->request()->input('height') ?: null,
            'width' => $this->request()->input('width') ?: null,
            'length' => $this->request()->input('length') ?: null,
        ]);
        $this->redirect('/');
    }
}
