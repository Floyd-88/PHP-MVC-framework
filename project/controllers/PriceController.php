<?php
namespace Project\Controllers;
use Core\Controller;
use Project\Models\Page;

class PriceController extends Controller
{
    public function modelPrice($param) {
$model = new Page;
// echo '<pre>';
// print_r($model->getById($param['id'])['name']);
// echo '</pre>';
$this->title = $model->getById($param['id'])['name'];
return $this->render('price/modelPrice', 
    $model->getById($param['id'])
);
    }
public function modelPriceAll($param) {
    $model = new Page;
    // echo '<pre>';
    // print_r($table = $model->getAll($param['from'], $param['to']));
    // echo '</pre>';
    $this->title = 'Выбранные товары';
    return $this->render('price/modelPriceAll', 
        ['table' => $model->getAll($param['from'], $param['to'])]
    );
// $data = $model->getAll(1, 3);
// var_dump($data);
}
}
