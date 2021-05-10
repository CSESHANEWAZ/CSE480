<?php
class Rectangle {
	
	private $width;
	private $height;
	private $area;

	public function setWidth($width)
	{
		$this->width = $width;
	}

	public function setHeight($height)
	{
		$this->height = $height;
	}
	public function getWidth($width)
	{
		return $this->width;
	}

	public function getHeight($height)
	{
		return $this->height;
	}

	public function showArea()
	{
		$this->area = ($this->width * $this->height);
		echo"Area:";
		echo $this->area."<br><br>";
		
	}
}

$r1 = new Rectangle;
$r2 = new Rectangle;

$r1->setHeight(5);
$r1->setWidth(10);

$r2->setHeight(3);
$r2->setWidth(6);

$r1->showArea();
$r2->showArea();

?> 

<?php
class Rect2 {
	
	private $width;
	private $height;
	private $area;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}	

	public function showArea()
	{
		$this->area = ($this->width * $this->height);
		echo"Ract2 Area:";
		echo $this->area;
		
	}

}

$r = new Rect2(10, 15); //10*15=150

$r->showArea();


?> 


