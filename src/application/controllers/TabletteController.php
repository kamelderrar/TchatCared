<?php 

require_once MODEL_PATH . DS . 'Tablette.php';

class TabletteController extends Controller
{
    public function action()
    {
        $this->view->tablettes = Tablette::getTablettes();
    }
}