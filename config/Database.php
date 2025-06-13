<?php

namespace Config {

  use PDO;

  class Database {
    static function getConnection(): PDO {
      $host = 'localhost';
      $port = 3306;
      $database = 'todos';
      $username = 'root';
      $password = '';

      return new PDO("mysql:dbname=$database;host=$host:$port", $username, $password);
    }
  }
}