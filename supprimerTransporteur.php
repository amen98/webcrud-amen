<?PHP
include "../core/transporteurC.php";
$transporteurC=new TransporteurC();
if (isset($_POST["cin"])){
	$transporteurC->supprimerTransporteur($_POST["cin"]);
	header('Location: afficherTransporteur.php');
}

?>