<?php
class Programme{
		
		public $Id_Programme;
		public $Nom_Programme;
		public $Image_Programme;
		public $Description;
		public $Pegi;
		public $Inedit;
		public $Saison;
		public $Episode;
		public $Duree;
		public $Moyenne;
		public $Id_Genre;
		public $Id_Type;
		
		public function __construct($Id_Programme=NULL, $Nom_Programme=NULL, $Image_Programme=NULL, $Description=NULL, $Pegi=NULL, $Inedit=NULL, $Saison=NULL, $Episode=NULL, $Duree=NULL, $Moyenne=NULL, $Id_Genre=NULL, $Id_Type=NULL){
			$this->Id_Programme = $Id_Programme;			
			$this->Nom_Programme=$Nom_Programme;
			$this->Image_Programme= $Image_Programme;
			$this->Description=$Description;
			$this->Pegi=$Pegi;
			$this->Inedit=$Inedit;
			$this->Saison=$Saison;
			$this->Episode=$Episode;
			$this->Duree=$Duree;
			$this->Moyenne=$Moyenne;
			$this->Id_Genre=$Id_Genre;
			$this->Id_Type=$Id_Type;
			
		}
		
		
		//éventuellement setters et getters
		
		
}

?>