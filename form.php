<?php
	if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['email']) != '' && trim($_POST['message']) != ''  ) {

		$message =  "Site: \n" .
					"Name: " . $_POST['name'] . "\n" .
					"Email: ". $_POST['email'] . "\n" .
					"Number:". $_POST['number'] . "\n" .
					"Message: ". $_POST['message'];
	
		mail( 'spam@gmail.com', "Interactive Together", $message ); 
		$new_url = 'return.html';
		header('Location: '.$new_url);
		
	}
	
	
	
	function checkValue($item, $message ) {
		if ( isset($item) && trim($item) == ''  ) {
			echo '<div class="error">' . $message . '</div>';
		} 
	}
	
	function printPostValue($item){
		if ( isset($item) && strlen(trim($item)) > 0 ) {
			echo $item;
		}
	}


?>