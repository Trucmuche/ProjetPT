<?php
class InternauteManager{
	

		public static function creer($p){
			
			$sql = "INSERT INTO Internaute VALUES ('',?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($p->Nom_Internaute, $p->Prenom_Internaute,$p->Pseudo,$p->Mdp,$p->Mail));
			$p->id=DB::get_instance()->lastInsertId();
			return $p;
			}

			
		public static function chercherParID($id){
			$sql="SELECT * from Internaute WHERE Id_Internaute=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($id));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$Internaute=new Internaute();
			$Internaute->Id_Internaute=$p[0];
			$Internaute->Nom_Internaute=$p[1];
			$Internaute->Prenom_Internaute=$p[2];
			$Internaute->Pseudo=$p[3];
			$Internaute->Mdp=$p[4];
			$programme->Mail=$p[5];											
			return $Internaute;
		}
		
			public static function chercherParPseudo($Pseudo){
			$sql="SELECT * from Internaute WHERE Pseudo=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($Pseudo));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetch();			
			$Internaute=new Internaute();
			$Internaute->Id_Internaute=$p[0];
			$Internaute->Nom_Internaute=$p[1];
			$Internaute->Prenom_Internaute=$p[2];
			$Internaute->Pseudo=$p[3];
			$Internaute->Mdp=$p[4];
			$Internaute->Mail=$p[5];											
			return $Internaute;									
	}
	
			//autres exemples de fonctions possibles
			public static function liste(){
			$sql="SELECT * from Internaute";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$p= $res->fetchAll();
			return $p;
			}
	}
?>
		