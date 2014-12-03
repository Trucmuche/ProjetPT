<?php
class GestionProgramme extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = ProgrammeManager::liste();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		$this->set_title("Modifier");
	
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
	
		
	}
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
		
	}
	

	public function action_ajouter(){
		$this->set_title("Ajouter");	
	//..préparer un formulaire	
	$this->set_title("Ajout d'un programme");		


		
		//construction d'un formulaire manuellement
		//chaque champ est ajouté par appel de fonction
		$f=new Form("?module=Formulaire&action=valide","form1");
			$f->add_text("Nom du programme","Nom du programme","Nom du programme")->set_required();		
			$f->add_text("Image du programme","Image du programme","Image du programme")->set_required();;		
			$f->add_textarea("Description","Description","Description")->set_required();;		
			$f->add_text("Pegi","Pegi","Pegi")->set_required();;		
			$f->add_password("pass1","pass1","Password")->set_required();;		
			$f->add_password("pass2","pass2","retapez le password")->set_required();;		
	

		$f->login->set_validation("max-length:20");
		$f->Nom->set_validation("max-length:50");
		$f->Prenom->set_validation("max-length:20");
		$f->pass1->set_validation("required");
		$f->pass2->set_validation("equals-field:pass1");		
		$f->mail->set_validation("mail");		


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("login"=>"Toto", "nom"=>"Patate"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une éventuelle réutilisation
		$this->session->form = $f;	
		
	ProgrammeManager::Creer($p);
		
	}

	public function action_detail(){
		$this->set_title("Détail");	
		
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
		
		
	}

	
	
}	
?>