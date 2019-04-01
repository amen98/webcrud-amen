<?PHP
class Livraison{
	private $id;
	private $transp;
	private $dest;
	private $adr;
	private $delais;
	private $codeC;
	private $frais;
	function __construct($id,$transp,$dest,$adr,$delais,$codeC,$frais){
		$this->id=$id;
		$this->transp=$transp;
		$this->dest=$dest;
		$this->adr=$adr;
		$this->delais=$delais;
		$this->codeC=$codeC;
		$this->frais=$frais;
	}
		
	function getId(){
		return $this->id;
	}
	function getTransp(){
		return $this->transp;
	}
	function getDest(){
		return $this->dest;
	}
	function getAdr(){
		return $this->adr;
	}
	function getDelais(){
		return $this->delais;
	}
	function getCodeC(){
		return $this->codeC;
	}
	function getFrais(){
		return $this->frais;
	}

	function setId($id){
		$this->id=$id;
	}
	function setDest($dest){
		$this->dest=$dest;
	}
	function setAdr($adr){
		$this->adr=$adr;
	}
	function setDelais($delais){
		$this->delais=$delais;
	}
	function setCodeC($codeC){
		$this->codeC=$codeC;
	}
	function setFrais($frais){
		$this->frais=$frais;
	}
	
}

?>