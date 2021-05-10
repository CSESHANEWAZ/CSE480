<?php
class Calculator {
	
	private $myValue;

	public function setValue($value)
	{
		echo""."<br><br>";
		$this->myValue = $value;
		echo"when value is: $value"."<br><br>";
	}

	public function square()
	{
		echo"The squre is: ";
		echo ($this->myValue * $this->myValue)."<br>";
		
	}

	public function qube()
	{
		echo" The qube is: ";
		echo ($this->myValue * $this->myValue * $this->myValue)."<br>";
		
	}


}

$r1 = new Calculator;

$r1->setValue(3);

$r1->square();
$r1->qube();

$r2 = new Calculator;
$r2->setValue(5);
$r2->square();
$r2->qube();
?> 

<?php
class Calculator2 {
	
	private $myValue;

	public function __construct($value) {
		echo""."<br><br>";
		echo"when value is: $value"."<br><br>";
		$this->myValue = $value;
	}	

	public function square()
	{
		echo ($this->myValue * $this->myValue)."<br>";
		
	}

	public function qube()
	{
		echo ($this->myValue * $this->myValue * $this->myValue)."<br>";
		
	}

}

$r2 = new Calculator2(5);

$r2->square();
$r2->qube();

?> 


