<?php

	class siteModel extends Model {
	
		public function __construct() {
	
			parent::__construct();
		}
		
		public function getClients() {
			
			$result = DB::query("SELECT * FROM ". DB_PREFIX . "clientes WHERE status = 'active' " );
			return $result;
		}
		public function getClient($id) {
			
			$result = DB::query("SELECT * FROM ". DB_PREFIX . "clientes WHERE id=%s AND status = 'active'", $id);
			return $result;
		}
		
		public function getProjects($id) {
			
			$result = DB::query("SELECT * FROM " . DB_PREFIX . "clientes_producto WHERE id_cliente=%s", $id);
			return $result;
		}
				
	}
		
?>