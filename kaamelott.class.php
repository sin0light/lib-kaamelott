<?php 

/**
* Class Kaamelott : Quote Kaamelott
*/
class kaamelott {
	/**
	* Properties
	*/
	private $haystackQuotes;
	private $rawQuotes;
	private $personnages;
	private $onlyPersonnages;
	

	/**
	* Methods
	*/

	function __construct() {
		include('data.php');
		$this->haystackQuotes = $haystackQuotes;
		$this->rawQuotes = $rawQuotes;
		$this->personnages = $personnages;
		$this->onlyPersonnages = $onlyPersonnages;
	}

	public function random() {
		return $this->haystackQuotes[array_rand($this->haystackQuotes)];
	}

	public function randomLivre($livre) {
		// Checking if $livre is correct
		if ($livre > 0 && $livre < 7) {
			// Getting all the quotes of this season
			foreach ($haystackQuotes as $key => $value) {
				if ($value['infos']['saison'] == mapLivre($livre)) {
					$quotes[] = $value;
				}
			}
			// Creating the result
			if (!empty($quotes)) {
				$return['status'] = 1;
				$return['citation'] = $quotes[array_rand($quotes)];
			} else {
				$return['status'] = 0;
				$return['error'] = 'Aucun resultat';
			}
		} else {
			$return['status'] = 0;
			$return['error'] = 'Livre inconnu.';
		}
		// Returning result
		return $return;
	}

	public function randomPersonnage($personnage) {
		# code...
	}

	public function randomLivrePersonnage($livre, $personnage) {
		# code...
	}

	public function all() {
		# code...
	}

	public function allLivre($livre) {
		# code...
	}

	public function allPersonnage($personnage) {
		# code...
	}

	public function allLivrePersonnage($livre, $personnage) {
		# code...
	}

	private function mapLivre($n) {
		switch ($n) {
			case '1':
				return 'Livre I ';
				break;
			case '2':
				return 'Livre II ';
				break;
			case '3':
				return 'Livre III ';
				break;
			case '4':
				return 'Livre IV ';
				break;
			case '5':
				return 'Livre V ';
				break;
			case '6':
				return 'Livre VI ';
				break;
			default:
				return false;
				break;
		}
	}

}


?>