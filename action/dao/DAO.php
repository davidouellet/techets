<?php
	require_once("action/DAO/Connection.php");

	class DAO {    

        // get file Attente Content
		public static function getFileAttenteContent(){

			$connection = Connection::getConnection();
			$statement = $connection->prepare("SELECT * FROM file_attente");
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();


			$tab=[];

			while ($row = $statement->fetch()) {
				$tab[]=[$row["UserID"],$row["ATIME"],$row["STIME"],$row["DTIME"],$row["MWID"]];
			}

			return $tab;
		}

}

		// // creer membre  equipe
		// public static function newMember($name,$surname,$imageFilePath,$presentation){
		// 	$connection = Connection::getConnection();
		// 	$statement = $connection->prepare("INSERT INTO teamMembers (name, surname, imageFilePath, presentation) VALUES (?,?,?,?)");
		// 	$statement->bindParam(1, $name);
		// 	$statement->bindParam(2, $surname);
		// 	$statement->bindParam(3, $imageFilePath);
		// 	$statement->bindParam(4, $presentation);
		// 	$statement->execute();

		// }