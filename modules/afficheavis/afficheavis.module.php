<?php
class afficheavis extends Module{

	public function action_index(){

		$this->set_title("Voir les avis de ");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = JugerManager::chercherParProg($this->req->id);
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		$this->set_title("Modifier");
		
		$f=new Form("?module=GestionProgramme&action=modification","form1");			
			$f->add_radiogroup("Note","Note","Note",array("tp"=>"0","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5"))->set_value("A")->set_required();		
			$f->add_textarea("Avis","Avis","Avis")->set_required();	


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("login"=>"Toto", "nom"=>"Patate"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une éventuelle réutilisation
		$this->session->form = $f;
	
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
	
	
	public function action_detail(){
		$this->set_title("Détail");	
		
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		$idgenre = $this->req->Id_Genre;
		$idtype = $this->req->Id_Type;
		
		$detail = new Programme();
		$genre = new Genre();
		$type = new Type();
		
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
		$this->tpl->assign("detail",$detail);		
		$this->tpl->assign("genre",$genre);		
		$this->tpl->assign("type",$type);		
		
		
	}

	public function action_afficher(){
		$this->set_title("Commentaires:");

		$id = $this->req->id;
		$ref= $this->req->ref;
		
		$data = JugerManager::chercherParProg($id);
		
		$this->tpl->assign("avis",$data);
	}	
}
?>