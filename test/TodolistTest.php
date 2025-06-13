<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../services/TodolistService.php';
require_once __DIR__ . '/../entity/Todolist.php';

use Config\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function TestStoreTodolist(): void {
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->addTodolist('Test 123');
}

function TestRemoveTodolist(): void {
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->removeTodolist(1);
}

function TestShowTodolist(): void {
  $connection = Database::getConnection();
  $todolistRepository = new TodolistRepositoryImpl($connection);
  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->showTodolist();
}

TestShowTodolist();