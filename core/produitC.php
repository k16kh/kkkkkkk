<?PHP


class ProduitC {
	function ajouterProduit($produit){
		$sql="insert into produit (lib_prod,id,prix,qte_prod,image,description) values (:lib_prod, :id, :prix, :qte_prod, :image, :description )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $lib_prod=$produit->getlib_prod();
        $id=$produit->getId();
        $prix=$produit->getPrix();
        $qte_prod=$produit->getqte_prod();
        $image=$produit->getImage();
        $description=$produit->getDescription();

		$req->bindValue(':lib_prod',$lib_prod);
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qte_prod',$qte_prod);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from produit ";


		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

    function supprimerProduits($idp){
		$sql="DELETE FROM produit where idp= :idp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idp',$idp);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierProduit($produit,$idp){
		$sql="UPDATE produit SET  lib_prod=:lib_prod, id=:id, prix=:prix, qte_prod=:qte_prod, image=:image, description=:description WHERE idp=:idp";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        
		$req->bindValue(':lib_prod',$lib_prod);
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qte_prod',$qte_prod);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);

		$datas = array(':idp'=>$idp,  ':lib_prod'=>$lib_prod, ':id'=>$id, ':prix'=>$prix, ':image'=>$image, ':qte_prod'=>$qte_prod, 'description'=>$description);

		$req->bindValue(':idp',$idp);
		$req->bindValue(':lib_prod',$lib_prod);
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qte_prod',$qte_prod);
		$req->bindValue(':image',$image);
		$req->bindValue(':description',$description);


            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	function recupererProduit($idp){
		$sql="SELECT * from produit where idp=$idp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trierProduit(){
$sql="SELECT * from produit ORDER BY prix ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>