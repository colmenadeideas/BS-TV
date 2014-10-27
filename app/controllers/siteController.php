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
		
		public function clientes($id) {
			
			
			$id = escape_value($id);
			
			$client = $this->model->getClient($id);
			
			$projects = $this->model->getProjects($id);
			$i= 0;
			foreach ($projects as $project) {
				
				$this->view->projects[$i] = $project;
				$this->view->projects[$i]['cliente'] = $client[0]["name"];
				$i++;
			}
			
			
			$this->view->buildpage('clientes');						
		}
		
		public function contacto() {				
			$this->view->buildpage('contact');						
		}
		
	}

?>