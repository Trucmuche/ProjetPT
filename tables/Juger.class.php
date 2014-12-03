<?php
class Juger{
		
		public $Id_Internaute;
		public $Id_Programme;
		public $Note;
		public $Avis;
		
		public function __construct($Id_Internaute=NULL, $Id_Programme=NULL, $Note=NULL, $Avis=NULL){
			$this->Id_Internaute = $Id_Internaute;			
			$this->Id_Programme=$Id_Programme;
			$this->Note= $Note;
			$this->Avis=$Avis;			
		}
		
		
		//éventuellement setters et getters
		
		
}

?>