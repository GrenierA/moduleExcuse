<?php

class TExcuse extends TObjetStd {
	
	function __construct() {
		
		$this->set_table(MAIN_DB_PREFIX.'excuse');
	  
		$this->add_champs('heure','type=text;');
		$this->add_champs('textExcuse','type=text;');
		
		$this->_init_vars();
		
		$this->start();
		
	}


}
?>