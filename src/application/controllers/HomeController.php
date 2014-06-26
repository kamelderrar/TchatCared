<?php

/**
 * Controller Accueil
 * @author Formateur
 *
 */
class HomeController extends Controller
{
    public function action()
    {
        $this->view->auth = $this->request->getSession()->getNamespace('auth');
    }
}