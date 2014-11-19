<?php
class inscription extends Module{

	public function init(){}

	public function action_index(){

		$this->set_title("Utilisation de l'objet formulaire");		


		
		//construction d'un formulaire manuellement
		//chaque champ est ajout� par appel de fonction
		$f=new Form("?module=Formulaire&action=valide","form1");
			$f->add_text("login","login","Login")->set_required();		
			$f->add_text("Nom","Nom","Nom")->set_required();;		
			$f->add_text("Prenom","Prenom","Prenom")->set_required();;		
			$f->add_text("mail","mail","M@il")->set_required();;		
			$f->add_password("pass1","pass1","Password")->set_required();;		
			$f->add_password("pass2","pass2","retapez le password")->set_required();;		
	

		$f->login->set_validation("max-length:20");
		$f->Nom->set_validation("max-length:50");
		$f->Prenom->set_validation("max-length:20");
		$f->pass1->set_validation("required");
		$f->pass2->set_validation("equals-field:pass1");		
		$f->mail->set_validation("mail");		


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pr�-remplissage du formulaire avec des valeurs par d�faut
		$f->populate(array("login"=>"Toto", "nom"=>"Patate"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une �ventuelle r�utilisation
		$this->session->form = $f;				
	}
	
	
	// recuperer le formulaire de la session
	// appelle $f->valid()
	// faire des tests en plus "en code"$
	// si il existe des erreurs ->populate, ->affiche des messages, ->assigne au template
	// si pas d'erreur ->enregistre en bd, redirige vers une autre page, ok

	
	public function action_valide(){

		$this->set_title("Inscription");
		$err=false;
		//on r�cup�re la structure du formulaire pr�c�demment stock� dans la session
		$form=$this->session->form;
		$form->reset_errors();
		$form->valid();
		
		
		//faire les tests de v�rification de remplissage/format des champs
		//... expressions r�guli�res, etc.
	
	
		//dans cet exemple, on v�rifie seulement si le login est vide et s'il n'existe pas dans la base

		if($this->requete->login == ''){
			$err=true;
			$form->login->set_error(true);
			$form->login->set_error_message("champ vide !");
		}
	
		//Appel � la BD via objet MembreManager
		elseif( MembreManager::chercherParLogin( $this->requete->login) !== false){
			$form->login->set_error(true);
			$form->login->set_error_message("login existant !");			
			$err=true;	
		 }
		


		//test upload fichier
		$fichier=$this->requete->file('pj');
		if( $fichier['size'] > 0 ){
			echo "Fichier : <pre>";
			print_r($fichier['name']);
			print_r($fichier['tmp_name']);
			print_r($fichier['type']);						
			echo "</pre>";
		}

		print_r($_REQUEST);


		//autres tests
		//...

		
		//si un des tests a �chou�
		if($err){	
		
			$this->site->ajouter_message('contr�le form : remplir les champs (uniquement login dans cet exemple)',ALERTE);			

		
			//on pr�-remplit avec les valeurs d�j� saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont �t� valid�s
		else{

			//cr�ation d'une instance de Membre
			$m=new Membre($this->requete->login,$this->requete->nom,$this->requete->pnom,
						$this->requete->mail,
						$this->requete->pass1
						);

			//enregistrement (insertion) dans la base
			MembreManager::creer($m);

			//passe un message pour la page suivante
			$this->site->ajouter_message('L\'utilisateur est enregistr�');			

			//redirige vers le module par d�faut
			$this->site->redirect('index');
		}
	}
}
?>