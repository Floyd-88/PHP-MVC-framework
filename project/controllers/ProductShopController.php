<?php
namespace Project\Controllers;
use Core\Controller;
use Project\Models\ProductShop;

class ProductShopController extends Controller
{
    public function one($param) {
        $product = (new ProductShop) -> OneProduct($param['id']);
        $this->title = $product['Наименование'];

        return $this->render('productshop/one', [
            'text'=>$product['Описание товара'],
            'price' => $product['Цена'],
            'count' => $product['Количество'],
            'header' => $this->title,
        ]);
    } 

    public function all() {
        $products = (new ProductShop) -> AllProducts();
        $this->title = 'Список всех товаров';
        echo '<pre>';
        print_r($products['0']['Наименование']);
        echo '</pre>';
        return $this->render('productshop/all', [
        'products' => $products,
        'header' => $this->title, 
        ]
        );    
    }
}