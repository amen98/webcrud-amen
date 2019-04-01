<?PHP
class Transporteur{
	private $id;
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $typeV;
	private $immat;
	function __construct($id,$cin,$nom,$prenom,$tel,$typeV,$immat){
		$this->id=$id;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->typeV=$typeV;
		$this->immat=$immat;
	}
		
	function getId(){
		return $this->id;
	}
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getTel(){
		return $this->tel;
	}
	function getTypeV(){
		return $this->typeV;
	}
	function getImmat(){
		return $this->immat;
	}

	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setTypeV($typeV){
		$this->typeV=$typeV;
	}
	function setImmat($immat){
		$this->immat=$immat;
	}
	
}

?>