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
		
		$f=new Form("?module=GestionProgramme&action=modification","form1");
			$f->add_text("Nom du programme","Nom du programme","Nom du programme")->set_required();		
			$f->add_text("Image du programme","Image du programme","Image du programme")->set_required();		
			$f->add_textarea("Description","Description","Description")->set_required();		
			$f->add_radiogroup("Pegi","Pegi","Pegi",array("tp"=>"0","10"=>"10","12"=>"12","16"=>"16","18"=>"18"))->set_value("A")->set_required();
			$f->add_password("pass1","pass1","Password")->set_required();
			$f->add_password("pass2","pass2","retapez le password")->set_required();		
	

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
		$f=new Form("?module=GestionProgramme&action=valide","form1");
			$f->add_text("Nom du programme","Nom du programme","Nom du programme")->set_required();
			$f->add_file("ImageProgramme","ImageProgramme","Image du programme");	
			$f->add_text("Image du programme","Image du programme","Image du programme")->set_required();		
			$f->add_textarea("Description","Description","Description")->set_required();		
			$f->add_radiogroup("Pegi","Pegi","Pegi",array("0"=>"tp","10"=>"10","12"=>"12","16"=>"16","18"=>"18"))->set_value("tp")->set_required();
			$f->add_select("Saison","Saison","Saison",array("1"=>"1","2"=>"2","3"=>"3"))->set_value("1");
			$f->add_select("Episode","Episode","Episode",array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24"))->set_value("1");
					
	

		// $f->login->set_validation("max-length:20");
		// $f->Nom->set_validation("max-length:50");
		// $f->Prenom->set_validation("max-length:20");
		// $f->pass1->set_validation("required");
		// $f->pass2->set_validation("equals-field:pass1");		
		// $f->mail->set_validation("mail");		


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("login"=>"Toto", "nom"=>"Patate"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une éventuelle réutilisation
		$this->session->form = $f;	
		
	//ProgrammeManager::Creer($p);
		
	}
	
	public function action_ajout(){
		
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);
		
		//enregistrer l'image dans les dossier et la base
		$fichier = $this->request->file('ImageProgramme');
		$name = uniqid().$fichier['name'];
		move_uploaded_file($fichier['tmp_name'],"images/ImageProgramme/$name");
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