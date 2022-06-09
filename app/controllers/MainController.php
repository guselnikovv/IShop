<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
      //получаем через ORM все записи в таблице
      $posts = \R::findAll('shop');



    // Вызываем метод setMeta для установки мета тегов
    $this->setMeta("Главная", 'Это главная страница', 'Главная, тест');
    $name = 'Viktor';
    $age = '27';
    $users = ['1', '2', '3'];

    $cache = Cache::instance();
    $cache->set('test', $name);

    // передаем значение в вид
    $this->set(compact('name', 'age', 'users', 'posts'));

    }


}
