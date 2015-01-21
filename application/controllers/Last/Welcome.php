<?php

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

	//shows last quote
    function index() {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->last();
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Last/Welcome.php */