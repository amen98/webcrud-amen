<?PHP
include "../entities/transporteur.php";
include "../core/transporteurC.php";
$transporteur=new Transporteur(2,130,'BEN Ahmed','Salah',50478,Voiture,130 TU 9874);
$transporteurrC=new TransporteurC();
$transporteurrC->afficherTransporteur($transporteur);
echo "****************";
echo "<br>";
echo "cin:".$transporteur->getCin();
echo "<br>";
echo "nom:".$transporteur->getNom();
echo "<br>";
echo "prenom:".$transporteur->getPrenom();
echo "<br>";
echo "nbH:".$transporteur->getNbHeures();
echo "<br>";
echo "tarif:".$transporteur->getTarifHoraire();
echo "<br>";
echo "le salaire est : ";
$transporteurrC->calculerSalaire($Transporteur); 
echo "<br>";


?>