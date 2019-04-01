<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["id"])){
	$livraisonC->supprimerLivraison($_POST["id"]);
	header('Location: afficherLivraison.php');
}

?>