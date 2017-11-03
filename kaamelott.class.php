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
		$this->personnages = $persos;
		$this->onlyPersonnages = $onlyPersos;
	}

	// Return a random quote 
	public function random() {
		return $this->haystackQuotes[array_rand($this->haystackQuotes)];
	}

	// Return a random quote from one season 
	public function randomLivre($livre) {
		// Checking if $livre is correct
		if ($livre > 0 && $livre < 7) {
			// Getting all the quotes of this season
			foreach ($this->haystackQuotes as $key => $value) {
				if ($value['infos']['saison'] == $this->mapLivre($livre)) {
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

	// Return a random quote from one season of one character
	public function randomPersonnage($personnage) {
		// Checking if $personnage is known
		if (in_array(strtolower($personnage), $this->onlyPersonnages)) {
			// Getting all the quotes of this character
			foreach ($this->haystackQuotes as $key => $value) {
				if (strtolower($value['infos']['personnage']) == strtolower($personnage)) {
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
			$return['error'] = 'Personnage inconnu';
		}
		// Returning result
		return $return;
	}

	// Return a random quote of one character
	public function randomLivrePersonnage($livre, $personnage) {
		// Checking if $personnage is known
		if (in_array(strtolower($personnage), $this->onlyPersonnages)) {
			// Checking if $livre is correct
			if ($livre > 0 && $livre < 7) {
			// Getting all the quotes of this season and this character
				foreach ($this->haystackQuotes as $key => $value) {
					if (strtolower($value['infos']['personnage']) == strtolower($personnage) && $value['infos']['saison'] == $this->mapLivre($livre)) {
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
				$return['error'] = 'Livre inconnu';
			}
		} else {
			$return['status'] = 0;
			$return['error'] = 'Personnage inconnu.';
		}
		// Returning result
		return $return;
	}

	// Return all the quotes
	public function all() {
		return $this->haystackQuotes;
	}

	// Return all the quotes from one season
	public function allLivre($livre) {
		// Checking if $livre is correct
		if ($livre > 0 && $livre < 7) {
			// Getting all the quotes of this season
			foreach ($this->haystackQuotes as $key => $value) {
				if ($value['infos']['saison'] == $this->mapLivre($livre)) {
					$quotes[] = $value;
				}
			}
			// Creating the result
			if (!empty($quotes)) {
				$return['status'] = 1;
				$return['citation'] = $quotes;
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

	// Return all the quotes of one character
	public function allPersonnage($personnage) {
		// Checking if $personnage is known
		if (in_array(strtolower($personnage), $this->onlyPersonnages)) {
			// Getting all the quotes of this character
			foreach ($this->haystackQuotes as $key => $value) {
				if (strtolower($value['infos']['personnage']) == strtolower($personnage)) {
					$quotes[] = $value;
				}
			}
			// Creating the result
			if (!empty($quotes)) {
				$return['status'] = 1;
				$return['citation'] = $quotes;
			} else {
				$return['status'] = 0;
				$return['error'] = 'Aucun resultat';
			}
		} else {
			$return['status'] = 0;
			$return['error'] = 'Personnage inconnu';
		}
		// Returning result
		return $return;
	}

	// Return all the quotes from one season of one character
	public function allLivrePersonnage($livre, $personnage) {
		// Checking if $personnage is known
		if (in_array(strtolower($personnage), $this->onlyPersonnages)) {
			// Checking if $livre is correct
			if ($livre > 0 && $livre < 7) {
			// Getting all the quotes of this season and this character
				foreach ($this->haystackQuotes as $key => $value) {
					if (strtolower($value['infos']['personnage']) == strtolower($personnage) && $value['infos']['saison'] == $this->mapLivre($livre)) {
						$quotes[] = $value;
					}
				}
				// Creating the result
				if (!empty($quotes)) {
					$return['status'] = 1;
					$return['citation'] = $quotes;
				} else {
					$return['status'] = 0;
					$return['error'] = 'Aucun resultat';
				}
			} else {
				$return['status'] = 0;
				$return['error'] = 'Livre inconnu';
			}
		} else {
			$return['status'] = 0;
			$return['error'] = 'Personnage inconnu.';
		}
		// Returning result
		return $return;
	}

	// Functions to map integer 'livre' to the correct value
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