<?PHP
include "../config.php";
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['idUtilisateurr']) and isset($_POST['sujetReclamation']) and isset($_POST['commentaireReclamation'])){
$reclamation1=new reclamation(0,$_POST['idUtilisateurr'],$_POST['sujetReclamation'],$_POST['commentaireReclamation'],$_POST['date']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location:reclamation.php');
	
}else{
	echo "vÃƒÂ©rifier les champs";
}
//*/

?>