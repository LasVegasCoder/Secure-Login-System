<?php

	If(!class_exists('WebController')){
		class WebController{
			
			/* private variables */
			private $_error_message = array();
			/* public variables */
			
			/* utilities */
			
			/* constants */
			
			public function __Construct(){
				//echo "Hello contstruct";
				//$this->run();
				
				echo 'Construct <br />';
				
				
				$logindata = array(
					'username' => 'prince',
					'userpass' => '12345',
					'userhash' => 'sjdkidsiwjijfwe'
				);
				
				//$this->debug($logindata);
			}
			
			private function run(){
				echo 'Hello world!';
				
				//exit();
			}
			
			private function login( $login_data = array() ){
				
				debug($login_data);
				
				
			}
			
			
			private function register_user( $register_data = array() ){
				
				
			}
			
			private function logout_user( $logout_data = array() ){
				
				
			}

			private function update_data( $update_data = array() ){
				
				
			}			
			
			private function delete_data( $delete_data = array() ){
				
				
			}			
			
			/*Debug Data */
			public function debug( $data = array() ){
				
				echo '<pre>' . print_r( $data, true )  . '</pre>';
				exit();
			}
			
		} //end of class WebController
	}

	
	new WebController();
?>
