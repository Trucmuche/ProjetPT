<?php
class Diffusion{
		
		public $Id_Diffusion;
		public $Id_Programme;
		public $Id_Chaine;
		public $Description;
		public $Horaire_Deb;
		public $Horaire_Fin;
		
		
		public function __construct($Id_Diffusion=NULL, $Id_Programme=NULL, $Id_Chaine=NULL, $Horaire_Deb=NULL, $Horaire_Fin=NULL){
			$this->Id_Diffusion = $Id_Diffusion;			
			$this->Id_Programme=$Id_Programme;
			$this->Id_Chaine= $Id_Chaine;
			$this->Horaire_Deb=$Horaire_Deb;
			$this->Horaire_Fin=$Horaire_Fin;	
			
		}
		
		
		//éventuellement setters et getters
		
		
}

?>