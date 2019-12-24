<!DOCTYPE html>
<html>
<body>
	<?php  
		class Record
		{
			public $termCode;
			public $termName;
			public $examDate;
			public $examShift;
			public $examTime;
			public $examRoom;
			public $examId;

			public function __construct($_termCode, $_termName, $_examDate, $_examShift, $_examTime, $_examRoom, $_examId)
			{
				$this->termCode = $_termCode;
				$this->termName = $_termName;
				$this->examDate = $_examDate;
				$this->examShift = $_examShift;
				$this->examTime = $_examTime;
				$this->examRoom = $_examRoom;
				$this->examId = $_examId;
			}
		}
	?>
</body>
</html>