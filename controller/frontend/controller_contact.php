<?php 
	class controller_contact extends controller{
		public function __construct(){
			parent::__construct();
			include "view/frontend/view_contact.php";
		}
	}
new controller_contact();
?>
