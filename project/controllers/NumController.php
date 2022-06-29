<?php
namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller
{
    public function sum($params) {
        // echo '<pre>';
        // echo print_r($params) . '<br>';
        // echo '</pre>';
        echo array_sum($params);
    }
}
