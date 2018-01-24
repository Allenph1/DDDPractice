<?php

	namespace Domain\Data\Factory;

	class MySQLDataMapperFactory
	{
		private $connection;
		private $table;
		private $mapperCache = [];
		function __construct(PDO $connection, String $table) {
			$this->setConnection($connection);
			$this->setTable($table);
		}
		private function setConnection(PDO $connection) {
			$this->connection = $connection;
		}
		private function getConnection() {
			return $this->connection;
		}
		private function setTable(String $table) {
			$this->table = $table;
		}
		private function getTable() {
			return $this->table;
		}
		function create(String $mapperClass) {
			if (array_key_exists($className, $this->cache)) {
					return $this->cache[$className];
			}
			$instance = new $className($this->connection, $this->table);
			$this->cache[$className] = $instance;
			return $instance;
		}
	}
