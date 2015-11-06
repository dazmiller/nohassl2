<?php

/**
 * Handling database connection
 *
 * @author Darren Miller
 */
class DbConnect {

	private $conn;

	function __construct() {
	}

	function rb_connect() {
		include_once dirname(__FILE__) . '/Config.php';
		R::setup('mysql:host=localhost;dbname=bitnami_wordpress', 'bn_wordpress', '4f6e1e8e91');
	}

	/**
	 * Establishing database connection
	 * @return database connection handler
	 */
	function connect() {
		include_once dirname(__FILE__) . '/Config.php';

		// Connecting to mysql database
		$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

		// Check for database connection error
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// returing connection resource
		return $this->conn;
	}

}

?>
