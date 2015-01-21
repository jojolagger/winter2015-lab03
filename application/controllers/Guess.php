<?php

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

	//supposed to load quote 4
    function index() {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get(4);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */