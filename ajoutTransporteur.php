<?PHP
include "../entities/transporteur.php";
include "../core/transporteurC.php";

if (isset($_POST['id']) and isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['typeV']) and isset($_POST['immat'])){
	$transporteur1=new Transporteur($_POST['id'],$_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['typeV'],$_POST['immat']);
	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$transporteur1C=new TransporteurC();
$transporteur1C->ajouterTransporteur($transporteur1);
header('Location: afficherTransporteur.php');
	
}else{
	echo "vérifier les champs";
	echo $_POST['typeV'];
}
//*/

?>