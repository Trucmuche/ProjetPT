<?php

class Index extends Module{

	public function action_index(){
		$this->set_title("Mon avis sur ...");

		$index=new Form("?module=Index&action=traitement","formulaireRecherche");
			$index->add_submit("programme","bntval")->set_value('Juger un programme !');
			$index->add_submit("avis","bntval")->set_value('Chercher un avis !');

		//passe les variables au template		
		$this->tpl->assign('index',$index);
	}

	public function action_traitement(){

		if ($this->requete->programme)
		{
			$this->site->redirect('programmes');
			return;
		}

		if ($this->requete->avis)
		{
			$this->site->redirect('afficheravis');
			return;
		}	
	}
}

?>