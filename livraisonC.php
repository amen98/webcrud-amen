<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "Id: ".$livraison->getId()."<br>";
		echo "Transporteur: ".$livraison->getTransp()."<br>";
		echo "Destination: ".$livraison->getDest()."<br>";
		echo "Adresse: ".$livraison->getAdr()."<br>";
		echo "Delais: ".$livraison->getDelais()."<br>";
		echo "Code commande: ".$livraison->getCodeC()."<br>";
		echo "Frais: ".$livraison->getFrais()."<br>";
	}
	
	function ajouterLivraison($livraison){
		$sql="insert into livraison (ID,TRANSPORTEUR,DESTINATION ,ADRESSE ,DELAIS ,CODE_COMMANDE,FRAIS ) values (:id, :transp, :dest,:adr,:delais,:codeC,:frais)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$id=$livraison->getId();
        $transp=$livraison->getTransp();
        $dest=$livraison->getDest();
        $adr=$livraison->getAdr();
		$delais=$livraison->getDelais();
		$codeC=$livraison->getCodeC();
		$frais=$livraison->getFrais();
		
		$req->bindValue(':id',$id);
		$req->bindValue(':transp',$transp);
		$req->bindValue(':dest',$dest);
		$req->bindValue(':adr',$adr);
		$req->bindValue(':delais',$delais);
		$req->bindValue(':frais',$frais);
		$req->bindValue(':codeC',$codeC);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($id){
		$sql="DELETE FROM livraison where ID= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison,$id){
		$sql="UPDATE Livraison SET ID=:idd, TRANSPORTEUR=:transp, DESTINATION=:dest,ADRESSE=:adr,DELAIS=:delais,CODE_COMMANDE=:codeC,FRAIS=:frais WHERE ID=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$idd=$livraison->getId();
        $transp=$livraison->getTransp();
        $dest=$livraison->getDest();
        $adr=$livraison->getAdr();
        $delais=$livraison->getDelais();
		$frais=$livraison->getFrais();
		$codeC=$livraison->getCodeC();
		$datas = array(':idd'=>$idd,':id'=>$id, ':transp'=>$transp, ':dest'=>$dest, ':adr'=>$adr,':delais'=>$delais,':codeC'=>$codeC,':frais'=>$frais);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':transp',$transp);
		$req->bindValue(':dest',$dest);
		$req->bindValue(':adr',$adr);
		$req->bindValue(':delais',$delais);
		$req->bindValue(':frais',$frais);
		$req->bindValue(':codeC',$codeC);
		
		
            $s=$req->execute();
		
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($id){
		$sql="SELECT * from livraison where ID=$id";
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