<?php

namespace ishop;

class Db
{
  use TSingletone;

  protected function __construct()
  {
    $db = require_once CONF . '/config_db.php';
    //создаем короткий псевдоним для пространства имен
    class_alias('\RedBeanPHP\R', '\R');
    //создаем подключение через ORM передавая параметры из конфиг файла
    \R::setup($db['dsn'], $db['user'], $db['pass']);
    if( !\R::testConnection() ) {
      throw new \Exception("Нет соединения с бд", 500);
    }
    \R::freeze(true);
    if(DEBUG){
      \R::debug(true, 1);
    }
  }
}
