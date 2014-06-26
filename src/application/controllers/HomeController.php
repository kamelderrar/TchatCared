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
    	
    	print_r($this->verificationForm ());
    }
    
    public function verificationForm()
    {
    	$post=$_POST;
    	
    	if(isset($post['login']) && isset($post['password']))
    	{
    		if(!empty($_POST['login']) && !empty($_POST['password'])){
    			$this->view->auth = $this->request->getSession()->getNamespace('auth');
    			echo $post['login'];
    		}
    		else
    		{
    			echo 'Veuillez renseigner tous les champs.';
    		}
    	}
    }
    
}