
<?php
require'config/config.php';
class Conexion extends Mysqli
	{
		public function __construct()
		{
			parent::__construct(HOST,USERNAME,PASS,DB_NAME);
			$this->set_charset('utf8');
			$this->connect_error? die('Error al conectar') :'';	
		}


	}


 ?>