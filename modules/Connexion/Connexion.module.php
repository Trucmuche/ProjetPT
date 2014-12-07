<?php
class Connexion extends Module{
			

	public function action_login(){

		// A FAIRE
		// verifier les donnees de connexion
		//charger le membre
		//$user=Membre::chercherParId(/*mettre l'id*/);
		//$this->session->ouvrir($user);
		
		//code de demo
		$test = new internaute();
		$test = InternauteManager::chercherParPseudo($this->req->Login);
		if(md5($this->req->Pass) == $test->Mdp)
		{
			$m=new Internaute();
			$m->pseudo = $this->req->Login;
			$this->session->user=$m;		
			$this->tpl->assign('login',$m->login);
			$this->site->ajouter_message("Vous êtes connecté en tant que ".$m->login);
			$this->site->redirect("index");
		}
		else
			$this->site->ajouter_message("ERREUR : mot de passe incorrect, veuillez réessayer");
		
		
	}

	public function action_deconnect(){		
		$this->site->ajouter_message('Vous êtes déconnecté');							
		$this->session->fermer(); 			
		$this->site->redirect("index");
	}

}
?>