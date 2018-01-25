<?php

	namespace Component;

	class MySQLDataMapper extends DataMapper
	{
			private $connection;
			private $table;
			function __construct(PDO $connection, String $table, Factory $factory) {
				$this->connection = $connection;
				$this->table = $table;
				$this->factory = $factory;
			}
			protected function getConnection() {
				return $this->connection;
			}
			protected function getTable() {
				return $this->table;
			}
			protected function getFactory() {
				return $this->factory;
			}
	}
