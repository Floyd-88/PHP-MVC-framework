<?php
namespace Project\Models;
use Core\Model;

class ProductShop extends Model
{
public function OneProduct($id) {
    return $this->findOne("SELECT * FROM productshop WHERE id=$id");
}
public function AllProducts() {
return $this->findMany("SELECT id, Наименование FROM productshop");
}
}