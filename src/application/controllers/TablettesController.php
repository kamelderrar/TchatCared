<?php

/**
 * Controller de la page tablettes
 * 
 * @category Appli
 * @author alexandra
 * @version 0.0.1
 *
 */
class TablettesController extends Controller
{
    public function action()
    {
        $menu = new Menu;
        $this->view->menu = $menu->getMenu();
    }
}