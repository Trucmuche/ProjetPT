<?php
class Chaine{

	public $Id_Chaine;
	public $Nom_Chaine;
	public $Img_Chaine;
	
	
	public function __construct($Id_Chaine=NULL, $Nom_Chaine=NULL, $Img_Chaine=NULL){
			$this->Id_Chaine = $Id_Chaine;			
			$this->Nom_Chaine=$Nom_Chaine;
			$this->Img_Chaine= $Img_Chaine;

}