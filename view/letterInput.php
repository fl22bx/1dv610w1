<?php 

class letterInput {
	private static $TEXT_FIELD_ID = "letter";
	
	function show () : string {
		return "
			<form method='get'>
				<input type='text' letter='" . self::$TEXT_FIELD_ID .  "' ></input>
				<input type='submit' >
			</form>
		" ;
	}

	function getLetter () {
		return isset($_GET[self::$TEXT_FIELD_ID]);
	}


}