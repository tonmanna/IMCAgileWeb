<?php

require_once "Rest.inc.php";

class API extends REST {

	public $data = "";

	const DB_SERVER = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB = "park_ko";

	private $db = NULL;

	public function __construct() {
		parent::__construct(); // Init parent contructor
		$this->dbConnect(); // Initiate Database connection
	}

	/*
		 *  Database connection
		*/
	private function dbConnect() {
		$this->db = mysqli_connect(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
		// if($this->db)
		// 	mysqli_select_db(self::DB,$this->db);
	}

	/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
	public function processApi() {
		$func = strtolower(trim(str_replace("/", "", $_REQUEST['rquest'])));
		if ((int) method_exists($this, $func) > 0) {
			$this->$func();
		} else {
			$this->response('', 404);
		}
		// If the method not exist with in this class, response would be "Page not found".
	}

	private function getladylist() {
		if ($this->get_request_method() != "GET") {
			$this->response('', 406);
		}

		$sql = mysqli_query($this->db, "SELECT p.park_no parkNo, p.id parkId, l.id isLadyPark
								FROM tbl_park p
								LEFT JOIN tbl_ladypark l
								ON p.id = l.id");

		// if (mysqli_num_rows($sql) > 0) {
		$result = array();
		while ($rlt = mysqli_fetch_array($sql, MYSQL_ASSOC)) {
			if ($rlt["isLadyPark"] == NULL) {
				$rlt["isLadyPark"] = "false";
			} else {
				$rlt["isLadyPark"] = "ture";
			}

			$result[] = $rlt;
		}
		// If success everythig is good send header as "OK" and return list of users in JSON format
		$this->response($this->json($result), 200);
		// }
		// $this->response('', 204); // If no records "No Content" status

		//$result = array("id" => "1");
		$this->response($this->json($result), 200);
	}

	private function setladypark() {

	}

	/*
		 *	Encode array into JSON
		*/
	private function json($data) {
		if (is_array($data)) {
			return json_encode($data);
		}
	}
}

// Initiiate Library

$api = new API;
$api->processApi();
?>