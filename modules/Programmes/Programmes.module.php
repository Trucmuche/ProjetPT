<?php
class Programmes extends Module{

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
		
		$f=new Form("?module=Programmes&action=modification","form1");
			$f->add_text("Nom du programme","Nom du programme","Nom du programme")->set_required();		
			$f->add_text("Image du programme","Image du programme","Image du programme")->set_required();		
			$f->add_textarea("Description","Description","Description")->set_required();		
			$f->add_radiogroup("Pegi","Pegi","Pegi",array("Tout Public"=>"0","10"=>"10","12"=>"12","16"=>"16","18"=>"18"))->set_value("A")->set_required();
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
		
		
		ProgrammeManager::supprimerParId($id);
		
		//passe ces informations dans le template
		
		//test pour affichage
		//throw new Exception("Exception");
		$this->site->ajouter_message("Suppression effectué");
		$this->site->redirect('Programmes');
		
	}
	

	public function action_ajouter(){
		$this->set_title("Ajouter");	
	//..préparer un formulaire	
	$this->set_title("Ajout d'un programme");		


		$data = GenreManager::liste();
		$data2 = TypeManager::liste();
		
		$data_select = array();
		foreach ($data as $ligne=>$donnees)
		{
			$data_select[$donnees['Id_Genre']] = $donnees['Nom_Genre'];
		}
		
		$data2_select = array();
		foreach ($data as $ligne=>$donnees)
		{
			$data2_select[$donnees['Id_Type']] = $donnees['Nom_Type'];
		}
		
		//construction d'un formulaire manuellement
		//chaque champ est ajouté par appel de fonction
		$f=new Form("?module=Programmes&action=valide","form1");
			$f->add_text("Nom du programme","NomDuProgramme","Nom du programme")->set_required();
			$f->add_file("ImageProgramme","ImageProgramme","Image du programme");			
			$f->add_textarea("Description","Description","Description")->set_required();		
			$f->add_radiogroup("Pegi","Pegi","Pegi",array("0"=>"Tout public","10"=>"10","12"=>"12","16"=>"16","18"=>"18"))->set_value("tp")->set_required();
			$f->add_select("Saison","Saison","Saison",array("NULL"=>"Aucune","1"=>"1","2"=>"2","3"=>"3"));
			$f->add_select("Episode","Episode","Episode",array("NULL"=>"Aucun","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24"));
			$f->add_select("Genre","Genre","Genre",$data_select)->set_value("Action")->set_required();	
			$f->add_select("Type","Type","Type",$data2_select)->set_value("Film")->set_required();	

		$f->NomDuProgramme->set_validation("max-length:50");
		$f->NomDuProgramme->set_validation("required");		
		$f->Description->set_validation("max-length:500");
		$f->pass1->set_validation("required");		


		$f->add_submit("Valider","bntval")->set_value('Valider');		

		//exemple de pré-remplissage du formulaire avec des valeurs par défaut
		$f->populate(array("login"=>"Toto", "nom"=>"Patate"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		
		//stocke la structure du formulaire dans la session sous le nom "form"
		//pour une éventuelle réutilisation
		$this->session->formulaireAjoutProgramme= $f;	
		
	}
	
	public function action_ajout(){
		
		//recupère les infos envoyés 
		
		$form=$this->session->formulaireAjoutProgramme;
		$form->reset_errors();
		$form->valid();
		
		//test de la taille du fichier
		$fichier=$this->requete->file('ImageProgramme');
		if( $fichier['size'] > 0 ){
			$err = true
		}
		
		if($err){	
		
			$this->site->ajouter_message('ERREUR : remplir correctement les champs',ALERTE);			

		
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			//enregistrer l'image dans les dossier et la base
			$fichier = $this->request->file('ImageProgramme');
			$name = uniqid().$fichier['name'];
			move_uploaded_file($fichier['tmp_name'],"images/ImageProgramme/$name");

			//création d'une instance de Membre
			$m=new Programme($this->requete->login,$this->requete->nom,$this->requete->pnom,
						$this->requete->mail,
						$this->requete->pass1
						);

			//enregistrement (insertion) dans la base
			ProgrammeManager::creer($m);

			//passe un message pour la page suivante
			$this->site->ajouter_message('L\'utilisateur est enregistré');			

			//redirige vers le module par défaut
			$this->site->redirect('index');
		}
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
		
		$detail = ProgrammeManager::chercherParId($id);
		$genre = GenreManager::chercherParId($idgenre);
		$type = TypeManager::chercherParId($idtype);
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
		$this->tpl->assign("detail",$detail);		
		$this->tpl->assign("genre",$genre);		
		$this->tpl->assign("type",$type);		
		
		
	}
	
}	
?>