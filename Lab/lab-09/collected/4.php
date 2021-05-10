<?php
class Circle {
	
	private $r;
	//pi=3.14

	public function setR($r)
	{
		$this->r = $r;
	}

	public function area()
	{
		echo "Area = " .(3.14 * $r * $r). "<br>";
	}

	public function circumference()
	{
		echo "Circumference = " . (3.14 * 2 * $r). "<br>";
	}
}

$obj1 = new Circle;

$obj1->setR(2);

$obj1->area();
$obj1->circumference();

?>