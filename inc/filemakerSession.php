<?php

class FileMakerSession {
	private $fm = null;
	private $username = "";
	private $password = "";
	private $server = "";
	public $database = "";
	public $defaultFormat = "json";

	public function __construct($server) {
		$this->server = $server;
	}

	public function connect($database="", $username="", $password="") {
		$this->database = $database;
		$this->username = $username;
		$this->password = $password;

		if(!$this->fm) {
			$this->fm = new FileMaker($this->database, $this->server, $this->username, $this->password);
		}
		return $this->fm;
	}
}