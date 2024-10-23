<?php 


namespace Count;



class Counter{

    public static $count = 0;


    public static function plusCount(){
        return self::$count++;
    }

   

}









?>