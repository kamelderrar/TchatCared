<?php

/**
 * Controller Accueil
 * @author Formateur
 *
 */
class HomeController extends Controller {
	public function verifForm() {
		$methode = $this->request->getMethod ();
		$form_data = array ();
		$form_data = $this->request->getParams ();
		$errmsg = array ();
		$msg = "";
		
		if (isset ( $form_data ['login'] ) && ! empty ( $form_data ['login'] )) {
			$msg = $msg . "||" . $form_data ['login'];
		} else {
			$errmsg [] = "Champs login vide";
		}
		if (isset ( $form_data ['password'] ) && ! empty ( $form_data ['password'] )) {
			$msg = $msg . "||" . $form_data ['password'];
		} else {
			$errmsg [] = "Champs password vide";
		}
		if (empty ( $errmsg )) {
			return $msg;
		} else {
			return $errmsg;
		}
	}
	public function action() {
		$this->view->auth = $this->request->getSession ()->getNamespace ( 'auth' );
		
		print_r($verification=$this->verifForm());
	}
}

