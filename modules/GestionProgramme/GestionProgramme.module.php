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
			$f->add_text("Nom_du_programme","Nom_du_programme","Nom du programme")->set_required();		
			$f->add_text("Image_du_programme","Image_du_programme","Image du programme");		
			$f->add_textarea("Description","Description","Description")->set_required();		
			$f->add_text("Pegi","Pegi","Pegi")->set_required();	
			$f->add_text("Inedit","Inedit","Inedit")->set_required();		
			$f->add_text("Saison","Saison","Saison")->set_required();		
			$f->add_text("Episode","Episode","Episode")->set_required();		
			$f->add_text("Duree","Duree","Durée")->set_required();		
			$f->add_text("Moyenne","Moyenne","Moyenne")->set_required();		
			$f->add_text("Id_Genre","Id_Genre","Id_Genre")->set_required();		
			$f->add_text("Id_Type","Id_type","Id_Type")->set_required();				


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("Nom_du_programme"=>"Chasseur de fantômes", "Moyenne"=>"10"));


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