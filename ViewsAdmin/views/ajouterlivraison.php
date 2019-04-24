<?PHP
include "../../entities/livraison.php";
include "../../core/livraisonL.php";
include "../../config.php";

if  isset($_POST['numcom']) and isset($_POST['nomclient']) and isset($_POST['prenomc']) and isset($_POST['numclient']) and isset($_POST['numadress']) and isset($_POST['nomrue']) and isset($_POST['nomville']) and isset($_POST['nomgouv']) and isset($_POST['prixlivraison']) and isset($_POST['prixcomm'])and isset($_POST['prixtotal'])and isset($_POST['cinlivreur'])and isset($_POST['datelivraison'])){
$livraison1=new livraison($_POST['numcom'],$_POST['nomclient'],$_POST['prenomc'],$_POST['numclient'],$_POST['numadress']),$_POST['nomrue']),$_POST['nomville']),$_POST['nomgouv']),$_POST['prixlivraison']),$_POST['prixcomm']),$_POST['prixtotal']),$_POST['cinlivreur']),$_POST['datelivraison']));
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$livraisonL1=new livraisonL();
$livraisonL1->ajouterlivraison($livraison1);

ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"casaluna.tn"<casaluna.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Nouvelle livraison st Disponnible Dans Notre Site Web Et Dans Notre Boutique";
 mail("niko.occoner@gmail.com", "Livraision !", $message, $header); 

header('Location: afficherlivraison.php');
}else{
	echo "vérifier les champs";
}
//*/

?>