<?php 

	class Shift
	{
		public $idShift;
		public $nameShift;
		public $idRoom;
		public $nameRoom;
		public $time;
		public $date;
		public $semester;

		function __construct($_idShift, $_nameShift, $_idRoom, $_nameRoom, $_time, $_date, $_semester)
		{
			$this->idShift= $_idShift;
			$this->nameShift = $_nameShift;
			$this->idRoom = $_idRoom;
			$this->nameRoom = $_nameRoom;
			$this->time = $_time;
			$this->date = $_date;
			$this->semester = $_semester;
		}
	}
?>