<?php
	class employee {	
		private $name;
		private $surname;
		private $email;
		private $phone;
		private $id;

		public function __construct(string $name, string $surname, string $email, string $phone, string $id) {
			$this->name = $name;
			$this->surname = $surname;
			$this->email = $email;
			$this->id = $id;
			$this->phone = $phone;
		}

		//list of informations about employee

		public function introduction() {
			echo '<br>';
			echo '<h4>Informace o zaměstnanci č. ' . $this->id . '</h4>';
			echo '<li>';
			echo $this->name;
			echo ' ';
			echo $this->surname;
			echo '<br><li>';
			echo $this->email;	
			echo '<br><li>';
			echo $this->phone;
		}

		//get - getting an email

		public function getEmail(string $email) {
			return $this->email;
		}

		//set - email change

		public function setEmail(string $email) {
			if (strpos($email, '@') > -1) {
				$this->email = $email;
			}
		}

		//set - phone number change

		public function setPhone(string $phone) {
			if(strlen($phone)==9) {
				$this->phone = $phone;
				return $this->phone;
			}
		}
		
	}

//array with employees
	
	$employees['1'] = new empLoyee('Jan', 'Novák', 'jannovak@gmail.com', '731568555' ,'1'); 
	$employees[] = new employee('Petr', 'Rychlý', 'petrrychly@seznam.cz', '604258556' ,'2');
	$employees[] = new employee('Lenka', 'Novotný', 'lenka.novotna@email.cz', '605021033' ,'3');


	$employees['3']->setPhone('731011498'); //phone number change
	$employees['2']->setEmail('peta@gmail.com'); //email change

 //introduction of all employees

	foreach ($employees as $employee) {
			$employee->introduction();
			}
?>
