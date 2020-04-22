<?php

namespace App\Services;

class MainService{

    public static function indexPage($portal='user'){
        if($portal=='user'){
            $page='HOME';
        }else{
            $page='ADMIN DB';
        }
        return ['page'=>$page];
    }

}