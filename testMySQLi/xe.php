<?php  
	$hangXe = "Honda";
	$loaiXe = "2 banh";
	$maxSpeed = null;


	function __construct($hangXe,$loaiXe,$maxSpeed = 60)
	{
		$this->hangXe = $hangXe;
		$this->loaiXe = $loaiXe;
		$this->maxSpeed = $maxSpeed;
	}

	function getHangXe(){
		return $this->hangXe;
	}
	function setHangXe($hang){
		$this->hangXe = $hang;
	}

	function getLoaiXe(){
		return $this->loaiXe;
	}
	function setLoaiXe($lx){
		$this->loaiXe = $lx;
	}

	function getMaxSpeed(){
		return $this->hangXe;
	}
	function setMaxSpeed($mp){
		$this->maxSpeed = $mp;
	}


	function getJson(){
		return json_encode("Hãng xe : ".$this->hangXe.",Loại xe : ".$this->loaiXe.",MaxSpeed : ".$this->maxSpeed);
	}

?>


