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
        $methode = $this->request->getMethod();
        $form_data = $this->request->getParams();
        if($methode=="POST"){
        	var_dump($this->request->getParams());
        }
    }
}