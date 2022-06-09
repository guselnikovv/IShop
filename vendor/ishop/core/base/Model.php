<?php
namespace ishop\base;

use ishop\Db;
//Класс работает с данными
abstract class Model
{
  public $attributes = [];
  public $errors = [];
  public $rules = [];

  public function __construct()
  {
    Db::instance();
  }
}
 ?>
