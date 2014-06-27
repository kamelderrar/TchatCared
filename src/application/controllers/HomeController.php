<?php

/**
 * Controller Accueil
 * @author Formateur
 *
 */
class HomeController extends Controller//Class HomeController héritant de la Class Controller
{
    public function action()//Méthode public action
    {
        $errMessages = array();//Création d'une variable $errMessages contenant un tableau vide
        
        if ($this->request->getMethod() == 'POST') {//Condition de test pour savoir si il y a un POST
        	$data = $this->request->getParams();//Récupération des paramètres reçus du navigateur
        	
        	if(!empty($data['login']) && !empty($data['password'])){//Condition de test pour savoir si login et password ne sont pas vide
        		$user = new UserModel();//Instanciation de l'objet UserModel
        		$result = $user->findByLoginAndPassword($data['login'], $data['password']);//Récupération d'un tableau contenant un enregistrement ou FALSE
        		if (FALSE == $result) {//Test pour savoir si il y a un résultat correspondant à la requète
        			$errMessages[] = 'Login & Password not match';//Ajout d'un message d'erreur
        		} else {
        			$this->request->getSession()->setNamespace('auth', $result);//Stock des données utilisateur dans les sessions
        		}
        	}
        	
        	if(empty($data['login'])){
        		$errMessages[] = 'Login obligatoire';//Ajout d'un message d'erreur
        	}
        	
        	if(empty($data['password'])){
        		$errMessages[] = 'Password obligatoire';//Ajout d'un message d'erreur
        	}

        	
        	$this->view->errMessages = $errMessages;
        
        }
        
        $this->view->auth = $this->request->getSession()->getNamespace('auth');
    }
}