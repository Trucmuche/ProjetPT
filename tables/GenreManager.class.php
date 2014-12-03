<?php
class GenreManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Genre VALUES ('', ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute($p->Nom_Genre);
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			
		}


		public static function chercherParID($id){
			$sql="SELECT * from Genre WHERE Id_Genre=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($id);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$genre=new Genre();
			$genre->Id_Genre=$p[0];
			$genre->Nom_Genre=$p[1];										
			return $genre;
		}



		public static function chercherParNom($nom){
			$sql="SELECT * from Genre WHERE Nom_Genre=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute($nom);
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$genre=new Genre();
			$genre->Id_Genre=$p[0];
			$genre->Nom_Genre=$p[1];										
			return $genre;									
		}
												
		
		
		// autres exemples de fonctions possibles
		public static function liste(){
			$sql="SELECT * from Genre";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			// gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return $p;
			
		}   		

		public static function desactiver(){
			
		}
		public static function activer(){
			
		}
}

?>