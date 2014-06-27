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
    	echo"action=action";
        $this->view->auth = $this->request->getSession()->getNamespace('auth');
    }
    public function inscription()
    {
    	echo ("action=inscription");
    	$this->view->auth = $this->request->getSession()->getNamespace('auth');
        $this->loadModel('User'); 
        if($this->request->data){
        	if($this->User->validates($this->request->data)){
        		$this->User->table = "users";
                $this->User->save($this->request->data);
                echo ('Compte crée');
            }else{
                echo ('Erreur dans l\'ajout des donnes');
                //$this->Session->setFlash('Merci de corriger vos informations','error'); 
            }
        }else{
        	echo('Aucune données a enregistrer');
        }
      }
}