<?php
	class employee {	// vytvoření třídy
		private $jmeno;
		private $prijmeni;
		private $email;
		private $phone;
		private $id;

		public function __construct($jmeno, $prijmeni, $email, $phone, $id) {
			$this->jmeno = $jmeno;
			$this->prijmeni = $prijmeni;
			$this->email = $email;
			$this->id = $id;
			$this->phone = $phone;
		}

		//výpis informací o zaměstnanci

		public function introduction() {
			echo '<br>';
			echo '<h4>Informace o zaměstnanci č. ' . $this->id . '</h4>';
			echo '<li>';
			echo $this->jmeno;
			echo ' ';
			echo $this->prijmeni;
			echo '<br><li>';
			echo $this->email;	
			echo '<br><li>';
			echo $this->phone;
		}

		//get - získání emailu

		public function getEmail() {
			return $this->email;
		}

		//set - změna emailu

		public function setEmail($email) {
			if (strpos($email, '@') > -1) {
				$this->email = $email;
			}
		}

		//set - změna tel. čísla

		public function setPhone($phone) {
			if(strlen($phone)==9) {
				$this->phone = $phone;
			}
		}
		
	}

//pole se zaměstnanci
	
	$employees = array('1' => new empLoyee('Jan', 'Novák', 'jannovak@gmail.com', '731568555' ,'1'), 
							  new employee('Petr', 'Rychlý', 'petrrychly@seznam.cz', '604258556' ,'2'),
						 	  new employee('Lenka', 'Novotný', 'lenka.novotna@email.cz', '605021033' ,'3'));


	$employees['3']->setPhone('731011498'); //změna tel. čísla
	$employees['2']->setEmail('peta@gmail.com'); //změna emailu

 //představení všech zaměstnanců

	$employees['1']->introduction();
	$employees['2']->introduction();
	$employees['3']->introduction();
?>
