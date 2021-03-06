<?php
namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller
{
    private $pages = [];

    public function __construct() {
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }

    public function act() {
        $this->title = 'Users';
        return $this->render('page/act', [
            'header' => 'Список юзеров',
            'users' => ['user1', 'user2', 'user3', 'user4'],
        ]);
    }
    public function show($param) {
        $this->title = $this->pages[$param['id']]['title'];
        return $this->render('page/show', 
        $this->pages[$param['id']]
        );
    }
}
?>
