<?php

	namespace Component;

	class MySQLDataMapper extends DataMapper
	{
			private $connection;
			private $table;
			function __construct(PDO $connection) {
				$this->setConnection($connection);
				$this->setTable($table);
			}
			private function setConnection(PDO $connection) {
				$this->connection = $connection;
			}
			protected function getconnection() {
				return $this->connection;
			}
			private function setTable(String $table) {
				$this->table = $table;
			}
			private function getTable() {
				return $this->table;
			}
	}
