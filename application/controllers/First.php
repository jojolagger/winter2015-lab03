<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }
	
	//generally is 1, might end up pointing elsewhere if Quotes.php is changed
    function index() {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->first();
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }

	//supposed to give page 1
	function zzz(){
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get(1);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }
	
	//the use of choice allows for getting any quote by id
	//even if only ever really used for 3
	function gimme($choice){
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get($choice);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */