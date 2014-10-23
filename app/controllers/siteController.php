<?php 
	
	class siteController extends Controller {
		
		public function __construct() {
			
			parent::__construct();	
		}
	
		public function index() {
				
			$this->view->render('enconstruccion');						
		}
		public function demo() {

			$clientes = $this->model->getClients();
			/*$i=0;
			foreach ($clientes as $cliente) {				
				$clientes[$i]['projects'] = $this->model->getProjects($cliente['id']);
				
				$i++;
			}*/
			$this->view->clientes = $clientes;	
							
			$this->view->buildpage('home');						
		}
		
		public function lacompania() {				
			$this->view->buildpage('aboutus');						
		}
	}

?>