<?php
namespace Project\Controllers;
use Core\Controller;

class UserController extends Controller
{
private $users;

public function __construct() {
    $this->users = [
        1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
        2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
        3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
        4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
        5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000]
    ];
}
public function show($params) {
    echo '<pre>';
    echo print_r($this->users[$params['id']]);
    echo '</pre>';
}
public function info($params) {
    var_dump($this->users[$params['id']][$params['key']]);
}
public function all() {
    echo '<pre>';
    echo print_r($this->users);
    echo '</pre>';
}
public function first($params) {
    $this->title = 'first user';
    $arr = array_splice($this->users, 0, $params['n']);
    echo '<pre>';
    echo print_r($arr);
    echo '</pre>';
}
}