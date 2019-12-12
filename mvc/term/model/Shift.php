<?php 

	class Shift
	{
		public $name;
		public $time;
		public $date;
		public $semester;

		function __construct($_name, $_time, $_date, $_semester)
		{
			$this->name = $_name;
			$this->time = $_time;
			$this->date = $_date;
			$this->semester = $_semester;
		}
	}
?>