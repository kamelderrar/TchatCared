<?php 

class Tablette
{
    private static $tablettes = array(
    	array( 'nom' => 'tablette 1', 'id' => 1, 'qte' => 12, 'image' => 'tablette1.png'),
    	array( 'nom' => 'tablette 2', 'id' => 11, 'qte' => 10, 'image' => 'tablette2.png'),
    	array( 'nom' => 'tablette 3', 'id' => 33, 'qte' => 120, 'image' => 'tablette3.png'),
    	array( 'nom' => 'tablette 4', 'id' => 27, 'image' => 'tablette4.png'),
    	array( 'nom' => 'tablette 5', 'id' => 14, 'image' => 'tablette5.png')
    );
    
    public static function getTablettes()
    {
        return self::$tablettes;
    }
}