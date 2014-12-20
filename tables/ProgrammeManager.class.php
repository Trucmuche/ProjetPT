<?php
class ProgrammeManager{
	

		public static function creer($p){
			$sql = "INSERT INTO Programme VALUES ('',?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Nom_Programme, $p->Image_Programme,$p->Description,$p->Pegi,$p->Inedit,$p->Saison,$p->Episode,$p->Duree,$p->Id_Genre,$p->Id_Type));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;	
		}


		public static function chercherParID($id){
			$sql="SELECT * from Programme WHERE Id_Programme=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$programme=new Programme();
			$programme->Id_Programme=$p[0];
			$programme->Nom_Programme=$p[1];
			$programme->Image_Programme=$p[2];
			$programme->Description=$p[3];
			$programme->Pegi=$p[4];
			$programme->Inedit=$p[5];											
			$programme->Saison=$p[6];											
			$programme->Episode=$p[7];
			$programme->Duree=$p[8];																						
			$programme->Id_Genre=$p[9];											
			$programme->Id_Type=$p[10];										
			return $programme;
		}

		public static function chercherParNom($nom){
			$sql="SELECT * from Programme WHERE Nom_Programme=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($nom));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$programme=new Programme();
			$programme->Id_Programme=$p[0];
			$programme->Nom_Programme=$p[1];
			$programme->Image_Programme=$p[2];
			$programme->Description=$p[3];
			$programme->Pegi=$p[4];
			$programme->Inedit=$p[5];											
			$programme->Saison=$p[6];											
			$programme->Episode=$p[7];
			$programme->Episode=$p[8];																						
			$programme->Id_Genre=$p[9];											
			$programme->Id_Type=$p[10];											
			return $programme;											
		}
		
		
		//autres exemples de fonctions possibles
		public static function liste(){
			$sql="SELECT * from Programme";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return $p;
		}

		public static function supprimerParID($id){
			$sql="DELETE from Programme WHERE Id_Programme=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
		}		

		public static function desactiver(){
			
		}
		public static function activer(){
			
		}
}

?>