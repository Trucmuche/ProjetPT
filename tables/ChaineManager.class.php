<?php
class ChaineManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Chaine VALUES ('',?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Nom_Chaine, $p->Img_Chaine));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			}

			
		public static function chercherParID($id){
			$sql="SELECT * from Chaine WHERE id=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$Chaine=new Chaine();
			$Chaine->Id_Chaine=$p[0];
			$Chaine->Nom_Chaine=$p[1];
			$Chaine->Img_Chaine=$p[2];
			return Chaine;
			}
		
			public static function chercherParNom_Chaine($Pseudo){
			$sql="SELECT * from Chaine WHERE Nom_Chaine=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($Pseudo));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$Chaine=new Internaute();
			$Chaine->Id_Chaine=$p[0];
			$Chaine->Nom_Chaine=$p[1];
			$Chaine->Img_Chaine=$p[2];							
			return Chaine;
	}
	
			//autres exemples de fonctions possibles
			public static function liste(){
			$sql="SELECT * from Chaine";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return p;
		