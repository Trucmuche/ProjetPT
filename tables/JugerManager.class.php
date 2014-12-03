<?php
class JugerManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Juger VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Id_Internaute, $p->Id_Programme,$p->Note,$p->Avis));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			
		}


		public static function chercherParInternaute($id){
			$sql="SELECT * from Juger WHERE id=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($id);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$juger=new Juger();
			$juger->Id_Internaute=$p[0];
			$juger->Id_Programme=$p[1];
			$juger->Note=$p[2];
			$juger->Avis=$p[3];										
			return $juger;
		}



		public static function chercherParProg($nom){
			$sql="SELECT * from Juger WHERE Nom_Programme=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($nom);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$juger=new Juger();
			$juger->Id_Internaute=$p[0];
			$juger->Id_Programme=$p[1];
			$juger->Note=$p[2];
			$juger->Avis=$p[3];									
			return $juger;											
		}
		
		
		//autres exemples de fonctions possibles
		public static function liste(){
			$sql="SELECT * from Juger";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return $p;
			/*$programme=new Programme();
			$programme->Id_Programme=$p[0];
			$programme->Nom_Programme=$p[1];
			$programme->Image_Programme=$p[2];
			$programme->Description=$p[3];
			$programme->Pegi=$p[4];
			$programme->Inedit=$p[5];											
			$programme->Saison=$p[6];											
			$programme->Episode=$p[7];																					
			$programme->Id_Genre=$p[8];											
			$programme->Id_Type=$p[9];											
			return $programme;*/
		}   		

		public static function desactiver(){
			
		}
		public static function activer(){
			
		}
}

?>