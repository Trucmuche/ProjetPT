<?php
class DiffusionManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Diffusion VALUES ('', ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Id_Programme, $p->Id_Chaine,$p->Horaire_Deb,$p->Horaire_Fin));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			
		}


		public static function chercherParID($id){
			$sql="SELECT * from Diffusion WHERE id=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($id);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$diffusion=new Diffusion();
			$diffusion->Id_Diffusion=$p[0];
			$diffusion->Id_Programme=$p[1];
			$diffusion->Id_Chaine=$p[2];
			$diffusion->Horaire_Deb=$p[3];
			$diffusion->Horaire_Fin=$p[4];										
			return $diffusion;
		}



		public static function chercherParProg($nom){
			$sql="SELECT * from Diffusion WHERE Id_Programme=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($nom);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$diffusion=new Diffusion();
			$diffusion->Id_Diffusion=$p[0];
			$diffusion->Id_Programme=$p[1];
			$diffusion->Id_Chaine=$p[2];
			$diffusion->Horaire_Deb=$p[3];
			$diffusion->Horaire_Fin=$p[4];										
			return $diffusion;										
		}
		
		public static function chercherParDeb($nom){
			$sql="SELECT * from Diffusion WHERE Horaire_Deb=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($nom);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$diffusion=new Diffusion();
			$diffusion->Id_Diffusion=$p[0];
			$diffusion->Id_Programme=$p[1];
			$diffusion->Id_Chaine=$p[2];
			$diffusion->Horaire_Deb=$p[3];
			$diffusion->Horaire_Fin=$p[4];										
			return $diffusion;										
		}
		
		//autres exemples de fonctions possibles
		public static function liste(){
			$sql="SELECT * from Diffusion";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			// gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return p;
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