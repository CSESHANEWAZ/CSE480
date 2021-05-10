<?php
class Student {
	
	private $name;
	private $id;
	private $cgpa;

	public function setName($name)
	{
		echo "$name";
		$this->name = $name;
	}

	public function setId($id)
	{
		echo "the id is: $id"."<br>";
		$this->id = $id;
	}
	public function setCGPA($cgpa)
	{
		echo "the cgpa is: $cgpa"."<br>";
		$this->cgpa = $cgpa;
	}

	public function getCGPA()
	{
		return $this->cgpa;
	}
}

$obj1 = new Student;
$obj2 = new Student;

$obj1->setCGPA(3.5);
$obj2->setCGPA(4);

$total = $obj1->getCGPA() + $obj2->getCGPA();
echo "the total cgpa is: $total"."<br><br>";
echo "Avg Cgpa: " . $total / 2 . "<br>";

?>