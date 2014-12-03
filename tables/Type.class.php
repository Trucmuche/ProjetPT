<?php
class Type{

	public $Id_Type;
	public $Nom_Type;
	
	
	public function __construct($Id_Type=NULL, $Nom_Type=NULL, $Img_Chaine=NULL){
			$this->Id_Type = $Id_Type;			
			$this->Nom_Type=$Nom_Type;

}