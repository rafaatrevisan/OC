<?php
	require_once('config.php');

	mysqli_report(MYSQLI_REPORT_STRICT);

	function abre_bd() {
		try {
			$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
			return $conn;
		} catch (Exception $e) {
			echo $e->getMessage();
			return null;
		}
	}

	function fecha_bd($conn) {
		try {
			mysqli_close($conn);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
}