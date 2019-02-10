<?php

//Klasa obsługująca wczytywanie podstron
class Podstrona
{	
	//Przehowuje odniesienie do podstrony
	private $_subpage = null;

	//Tablica z nazwami dozwolonych podstron
	private $_allowed = array('witaj','zatrudnij','kimjestem','oferta','cv','kontakt','portfolio');

	//Podstawowy adres do plików podstron
	private $_base = 'subpage/';

	//Pobranie i ustawienie zmiennej GET['show']
	public function __construct($get)
	{
		if(!isset($get) || empty($get))
		{
			$this->setSubpage($this->_allowed[0]);
		} 
		else if(in_array($get, $this->_allowed) && file_exists($this->_base.$get.'.html'))
		{
			$this->setSubpage($get);
		}
		else $this->_subpage = '404';
	}


	//Seter i geter dla $_subpage

	private function setSubpage($subpage)
	{
		$this->_subpage = $subpage;
	}			

	private function getSubpage()
	{
		return $this->_subpage;
	}

	//Wyświetla odpowiednią podstronę
	public function showSubpage()
	{
		$subpage = $this->getSubpage(); //Nazwa podstrony
		$url = $this->_base.$subpage.'.html'; //Adres do pliku podstrony

		switch ($subpage) 
		{
			case 'zatrudnij':
				include_once($url);
				break;

			case 'kimjestem':
				include_once($url);
				break;

			case 'oferta':
				include_once($url);
				break;

			case 'cv':
				include_once($url);
				break;

			case 'kontakt':
				include_once($url);
				break;

			case 'portfolio':
				include_once($url);
				break;

			case 'witaj':
				include_once($url);
				break;
			
			case '404':
			default:
				header('HTTP/1.1 404 Not Found');
				include_once($this->_base.'404.html');
				break;
		}
	}

}

$podstrona = new Podstrona($_GET['show']);
$podstrona->showSubpage();

?>