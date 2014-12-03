<?php
class Internaute{

	public $Id_Internaute;
	public $Nom_Internaute;
	public $Prenom_Internaute;
	public $Pseudo;
	public $Mdp;
	public $Mail;
	
	public function __construct($Id_Internaute=NULL, $Nom_Internaute=NULL, $Prenom_Internaute=NULL, $Pseudo=NULL, $Mdp=NULL, $Mail=NULL){
			$this->Id_Internaute = $Id_Internaute;			
			$this->Nom_Internaute=$Nom_Internaute;
			$this->Prenom_Internaute= $Prenom_Internaute;
			$this->Pseudo=$Pseudo;
			$this->Mdp=$Mdp;
			$this->Mail=$Mail;
}

}

?>