<?php

Class Matiere {

    static function getAllMatiereByNiveau($idNiveau)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere WHERE idNiveau = ?');
        $stat->execute([$idNiveau]);
        return $stat->fetchAll();
    }
    static function getMatiere($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere WHERE idMatiere = ?');
        $stat->execute([$id]);
        return $stat->fetch();
    }
    static function getAllMatiere()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere');
        $stat->execute();
        return $stat->fetchAll();
    }

    static function insertMatiere($reqLibMatiere,$reqImgMatiere)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO matiere (libMatiere,imgMatiere) VALUES(?,?)');
        $stat->execute([$reqLibMatiere,$reqImgMatiere]);
    }

    static function deleteMatiere($idMatiere)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM matiere WHERE idMatiere =  ?');
        $stat->execute([$idMatiere]);
        return $stat->fetchAll();
    }

    static function updateMatiere($idMatiere,$reqLibMatiere,$reqIdNiveau)
    {
      global $db;
      $stat = $db->prepare('UPDATE matiere SET libelleMatiere=?, idNiveau=? WHERE idMatiere=?');
      $stat->execute([$reqLibMatiere,$reqIdNiveau,$idMatiere]);
      return $stat->fetchAll();
    }
    
}