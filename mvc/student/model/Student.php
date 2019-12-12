<!DOCTYPE html>
<html>
<body>
	<?php  
		class Student
		{
			public $id;
			public $name;
			public $age;
			public $class;

			public function __construct($_id, $_name, $_age, $_class)
			{
				$this->id = $_id;
				$this->name = $_name;
				$this->age = $_age;
				$this->class = $_class;
			}
		}
	?>
</body>
</html>