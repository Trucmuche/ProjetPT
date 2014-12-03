<?php
class Genre{
		
		public $Id_Genre;
		public $Nom_Genre;
		
		
		
		public function __construct($Id_Genre=NULL, $Nom_Genre=NULL){
			$this->Id_Genre = $Id_Genre;			
			$this->Nom_Genre=$Nom_Genre;						
		}
		
		
		//éventuellement setters et getters
		
		
}

?>