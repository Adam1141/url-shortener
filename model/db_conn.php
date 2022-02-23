<?php

//db connection class using singleton pattern
class dbConn{
    // singleton database connection helper class
	
	//variable to hold connection object.
	protected static $db;
		
	private function __construct() {
		require "config.php";
		try {
			// assign PDO object to db variable 
			self::$db = new PDO( $dsn, $username, $password, $options );
			// self::$db->setAttribute( $options );
		}
		catch (PDOException $e) {
			echo "Connection Error: " . $e->getMessage();
		}
	}
	
	// get connection function.
	public static function getConnection() {
		
		//if connection doesnt exist already, create one.
		if (!self::$db) {
			new dbConn();
		}
		
		//return connection.
		return self::$db;
	}
	
	
	
}//end class

?>