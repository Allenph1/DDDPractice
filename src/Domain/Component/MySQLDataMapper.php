<?php

	namespace Component;

	class MySQLDataMapper
	{
			private $connection;
			private $table;
			function __construct(PDO $connection, String $table) {
				$this->setConnection($connection);
				$this->setTable($table);
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
