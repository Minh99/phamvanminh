<?php 

	/**
	 * 
	 */
	require('xe.php');
	class Xemay extends xe
	{
		private $tenXe;
		$maxSpeed = new xe()->getMaxSpeed();
		function __construct($tenXe = null)
		{
			$this->tenXe = $tenXe;
		}

		function toJson(){
			return json_encode("Ten xe : ".$this->tenXe);
		}
	}



	a = new Xemay("Winner");
	echo a->toJson();

 ?>