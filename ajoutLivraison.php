<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['id']) and isset($_POST['transp']) and isset($_POST['dest']) and isset($_POST['adr']) and isset($_POST['delais']) and isset($_POST['codeC']) and isset($_POST['frais']) ){
	$livraison1=new Livraison($_POST['id'],$_POST['transp'],$_POST['dest'],$_POST['adr'],$_POST['delais'],$_POST['codeC'],$_POST['frais']);
	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherLivraison.php');
	
}else{
	echo "vérifier les champs";
	
}
//*/

?>