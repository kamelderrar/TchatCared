<?php 

class Menu
{
    private static $menu = array(
    	0 => array('tablette_all', 'Toutes les tablettes tactiles', 128),
        1 => array('tablette_windows', 'Tablette tactile windows', 10),
        2 => array('ipad', 'iPad', 45),
        3 => array('tablette_android', 'Tablette tactile Android', 73),
        4 => array('tablette_essentielB', 'Tablette tactile Essentiel B', 8),
        5 => array('accessoire_ipad', 'Accessoire pour iPad', 112),
        6 => array('accessoire_tablette', 'Accessoire pour tablette tactile', 359),
        7 => array('robot', 'Appcessoire et robot', 55),
        8 => array('ebook', 'e-book / livre électronique', 9),
        9 => array('accessoire_ebook', 'Accessoire pour e-book', 3),
        10 => array('livre_numerique', 'Téléchargement livres numériques'),
        11 => array('presse_numerique', 'Téléchargement presse numérique')
    );
    
    /**
     * @param int $id
     * @throws Exception si $id ne correspond pas a un element existant
     * @return multitype
     */
    public function read($id)
    {
        if(array_key_exists($id, self::$menu)) {
            return self::$menu[$id];
        } else {
            throw new Exception('Element introuvable');
        }
    }
	/**
     * @return the $menu
     */
    public static function getMenu()
    {
        return Menu::$menu;
    }

}