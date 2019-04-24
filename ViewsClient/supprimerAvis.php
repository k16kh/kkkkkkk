<?PHP
include "../core/avisC.php";
$avisC=new avisC();
if (isset($_POST["num"])){
	$avisC->supprimerAvis($_POST["num"]);
	header('Location: avis.php');
}

?>