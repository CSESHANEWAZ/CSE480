<?php
class Box {
	
	private $l;//length
	private $h;//height
	private $w;//wedth
	private $area;

	public function __construct($l, $h, $w) {
		$this->l = $l;
		$this->h = $h;
		$this->w = $w;
	}	

	public function getArea()
	{
		$this->area = (2 * $this->l * $this->h) + (2 * $this->h * $this->w) + (2 * $this->l * $this->w);
		return $this->area;
		
	}
}

$obj = new Box(5, 2, 3);

if($obj->getArea() == 62){
	echo "Working fine". "<br>";
}
else{
	echo "Error" . "<br>";
}
?> 