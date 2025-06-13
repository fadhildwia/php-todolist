<?php

namespace Repository {

  use Entity\Todolist;
  use PDO;

  interface TodolistRepository
  {
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
  }

  class TodolistRepositoryImpl implements TodolistRepository
  {
    private array $todolist = array();

    private PDO $connection;
    
    public function __construct($connection)
    {
      $this->connection = $connection;
    }

    function save(Todolist $todolist): void
    {
      $sql = "INSERT INTO todolist(todo) VALUES (?)";
      $statement = $this->connection->prepare($sql);

      $statement->execute([$todolist->getTodo()]);
    }

    function remove(int $number): bool
    {
      $sql = "SELECT * FROM todolist WHERE id=?";
      $statement = $this->connection->prepare($sql);

      $statement->execute([$number]);

      if ($statement->fetch()) {
        $sql = "DELETE FROM todolist WHERE id=?";
        $statement = $this->connection->prepare($sql);

        $statement->execute([$number]);
        return true;
      } else {
        return false;
      }
    }

    function findAll(): array
    {
      $sql = "SELECT * FROM todolist";
      $statement = $this->connection->prepare($sql);

      $statement->execute();

      // $rows = $statement->fetch();
      // var_dump($rows);

      $result = [];
      foreach($statement as $row) {
        $todo = new Todolist();
        $todo->setId($row['id']);
        $todo->setTodo($row['todo']);

        $result[] = $todo;
      }

      return $result;
    }
  }
}
