<?PHP
include "../config.php";
class TransporteurC {
function afficherTransporteur ($transporteur){
		echo "Id: ".$transporteur->getId()."<br>";
		echo "Nom: ".$transporteur->getNom()."<br>";
		echo "Prénom: ".$transporteur->getPrenom()."<br>";
		echo "Tel: ".$transporteur->getTel()."<br>";
		echo "type véhicule: ".$transporteur->getTypeV()."<br>";
		echo "Immatricule: ".$transporteur->getImmat()."<br>";
	}
	
	function ajouterTransporteur($transporteur){
		$sql="insert into transporteur (ID,CIN,NOM,PRENOM,TEL,TYPE_VEHICULE,IMMATRICULATION) values (:id, :cin, :nom,:prenom,:tel,:typeV,:immat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$id=$transporteur->getId();
        $cin=$transporteur->getCin();
        $nom=$transporteur->getNom();
        $prenom=$transporteur->getPrenom();
        $tel=$transporteur->getTel();
		$typeV=$transporteur->getTypeV();
		$immat=$transporteur->getImmat();
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':typeV',$typeV);
		$req->bindValue(':immat',$immat);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherTransporteurs(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SElECT * From transporteur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerTransporteur($cin){
		$sql="DELETE FROM transporteur where CIN= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierTransporteur($transporteur,$cin){
		$sql="UPDATE transporteur SET ID=:id, CIN=:cinn, NOM=:nom,PRENOM=:prenom,TEL=:tel,TYPE_VEHICULE=:typeV,IMMATRICULATION=:immat WHERE CIN=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$id=$transporteur->getId();
		$cinn=$transporteur->getCin();
        $nom=$transporteur->getNom();
        $prenom=$transporteur->getPrenom();
        $tel=$transporteur->getTel();
		$typeV=$transporteur->getTypeV();
		$immat=$transporteur->getImmat();
		$datas = array(':cinn'=>$cinn, ':id'=>$id, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':typeV'=>$typeV, ':immat'=>$immat);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':typeV',$typeV);
		$req->bindValue(':immat',$immat);
		
		
            $s=$req->execute();
		
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererTransporteur($cin){
		$sql="SELECT * from transporteur where cin=$cin";
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