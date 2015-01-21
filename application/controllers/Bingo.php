<?php

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }
	
	//supposed to give page 5
    function index() {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get(5);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }
	
	//supposed to give page 6
	function wisdom() {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get(6);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }

}