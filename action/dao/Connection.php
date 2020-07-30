<?php

	class Connection {
        private static $connection = null;


		public static function getConnection() {

			$hostname = 'localhost:49281';
			$username = 'techets';
			$password = 'T3chETS123';

			try{
				if (Connection::$connection == null) {
					Connection::$connection = new PDO("mysql:host=localhost:49281;dbname=localdb", $username, $password);
					Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				}

			}

			catch(PDOException $e)
    		{
    		echo $e->getMessage();
    		}

			return Connection::$connection;
		}

	}