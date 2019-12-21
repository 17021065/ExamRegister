<?php 
		for($i=0; $i < count($listOfTerms); $i++){
			echo "<p><a href='?termCode=".$i."'> [".$listOfTerms[$i]->code."] ".$listOfTerms[$i]->name."</a></p>";
		}

		include_once 'TermList.html';
?>
