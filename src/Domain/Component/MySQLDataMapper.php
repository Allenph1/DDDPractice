<?php

	namespace Component;

	class MySQLDataMapper
	{
			private $connection;
			private $table;
			function __construct(PDO $connection, String $table) {
				$this->connection = $connection;
				$this->table = $table;
			}
			private setConnection(PDO $connection) {
				$this->connection = $connection;
			}
			protected getconnection() {
				return $this->connection;
			}
			private setTable(String $table) {
				$this->table = $table;
			}
			private getTable() {
				return $this->table;
			}
	}
