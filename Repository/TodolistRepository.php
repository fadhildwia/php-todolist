<?php

namespace Repository {

  use Entity\Todolist;

  interface TodolistRepository
  {
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
  }

  class TodolistRepositoryImpl implements TodolistRepository
  {
    private array $todolist = array();

    function save(Todolist $todolist): void
    {
      $number = count($this->todolist);
      $this->todolist[$number] = $todolist;
    }

    function remove(int $number): bool
    {
      if ($number < 1 || $number > count($this->todolist)) {
        echo "Todo not found!" . PHP_EOL;
        return false;
      }

      for ($i = $number - 1; $i < count($this->todolist) - 1; $i++) {
        $this->todolist[$i] = $this->todolist[$i + 1];
      }
      unset($this->todolist[count($this->todolist) - 1]);

      return true;
    }

    function findAll(): array
    {
      return $this->todolist;
    }
  }
}
