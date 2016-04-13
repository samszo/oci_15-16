<?php
class BDD {
	// Attributs
	public $estConnecte;
	protected $maDB;

	// Constructeur
	public function __construct($user,$pass,$host,$dbname,$options=array()){
		try {
			$this->maDB=new PDO(
			 'mysql:host='.$host.
			 ';dbname='.$dbname.
			 ';charset=utf8',$user,$pass,$options);
			$this->maDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->maDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this->estConnecte=true;
		}
		catch(PDOException $e){
			throw new Exception($e->getMessage());
			$this->estConnecte=false;
		}
	}

	public function deconnecter(){
		unset($this->maDB); // OU $this->maDB=null;
		$this->estConnecte=false;
	}

	public function lireLigne($req,$param=array()){
		try {
			$result=$this->maDB->prepare($req);
			$result->execute($param);
			return $result->fetch();
		}
		catch(PDOException $e){
			throw new Exception($e->getMessage());
		}
	}

	public function tableau($req, $param=array()){
		try {
			$result=$this->maDB->prepare($req);
			$result->execute($param);
			$tab='<table id="tableau">';
			// En-tete du tableau
			$tab.='<tr>';
			for ($i=0;$i<$result->columnCount();$i++){
				$cols=$result->getColumnMeta($i);
				$tab.='<th>'.$cols['name'].'</th>';
			}
			$tab.='</tr>';
			// Corps du tableau
			while ($ligne = $result->fetch()){
				$tab.='<tr>';
				foreach ($ligne as $cle=>$val){
					$tab.='<td>'.$val.'</td>';
				}
				$tab.='</tr>';
			}
			$tab.='</table>';
			return $tab;
		}
		catch(PDOException $e){
			throw new Exception($e->getMessage());
		}
	}
}
?>
















