<?php
class TypeManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Type VALUES ('',?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Nom_Type));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			}

			
		public static function chercherParID($id){
			$sql="SELECT * from Type WHERE id=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$type=new Type();
			$type->Id_Type=$p[0];
			$type->Nom_Type=$p[1];											
			return $type;
		}
		
			public static function chercherParNom($nom){
			$sql="SELECT * from Type WHERE nom=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($nom));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$type=new Type();
			$type->Id_Type=$p[0];
			$type->Nom_Type=$p[1];											
			return $type;									
		
	}
	
			//autres exemples de fonctions possibles
			public static function liste(){
			$sql="SELECT * from Type";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return p;