<?php
class Rating {
function save ($Sujet,$commentaire,$stars){
    $sql ="REPLACE INTO `avis` (`num`,`id_user`,`jour`, `sujet`,`commentaire`, `rating`) VALUES (:num,:id_user,:jour,:Sujet,:commentaire,:rating)";

      $db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',3);
        $req->bindValue(':id_user',2);
        $req->bindValue(':jour',date("Y-m-d h:i:sa"));
        $req->bindValue(':Sujet',$Sujet);
        $req->bindValue(':commentaire',$commentaire);
        $req->bindValue(':rating',$stars);
        
        
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }


}
?>