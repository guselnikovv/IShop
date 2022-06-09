<?php
// 0b2c681b1aa2296fb0e0cecc714625a862d949f7
namespace ishop;

trait TSingletone{

    private static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}
