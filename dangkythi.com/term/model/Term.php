<?php  

class Term
{
	public $id;
	public $code;
	public $name;
	function __construct($_id, $_code, $_name)
	{
		$this->id= $_id;
		$this->code= $_code;
		$this->name= $_name;
	}
}

?>