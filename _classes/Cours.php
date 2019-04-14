<?php

class Cours{

	static function getAllCours(){
		global $db;
		$stat=$db->prepare("SELECT * FROM cours");
		$stat->execute();
		return $stat->fetchAll();
	}

	static function getAllCourseByMatiere($matiere,$lvl)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM cours WHERE idMatiere = ? AND idNiveau = ?');
        $stat->execute([$matiere,$lvl]);
        return $stat->fetchAll();
    }

	static function insertCours($nom_cours,$content_cours,$id_matiere,$id_niveau){
		global $db;
		$stat=$db->prepare("INSERT INTO cours(nomCours,contentCours,idMatiere,idNiveau) VALUES(?,?,?,?) ");
		$stat->execute([$nom_cours,$content_cours,$id_matiere,$id_niveau]);
	}

	static function deleteCours($id){
    global $db;
    $stat = $db->prepare('DELETE FROM cours WHERE id=?');
    $stat->execute([$id]);
	}
	
	static function getCours($matiere, $lvl){

		    global $db;
        $stat = $db->prepare('SELECT * FROM cours INNER JOIN matiere ON matiere.idMatiere = cours.idMatiere INNER JOIN niveau ON niveau.idNiveau = cours.idNiveau WHERE cours.idCours = ? and cours.idNiveau = ?');
        $stat->execute([$matiere, $lvl]);
        return $stat->fetch();

	}

	static function searchMatiere($recherche){

		    global $db;
        $stat = $db->prepare('SELECT matiere.* FROM cours INNER JOIN matiere ON matiere.idMatiere = cours.idMatiere WHERE cours.nomCours LIKE ?');
        $stat->execute(['%'.$recherche.'%']);
        return $stat->fetchAll();

	}

	static function searchCours($recherche, $matiere){

		    global $db;
        $stat = $db->prepare('SELECT * FROM cours WHERE nomCours LIKE ? and idMatiere = ?');
        $stat->execute(['%'.$recherche.'%', $matiere]);
        return $stat->fetchAll();

	}
  

}
