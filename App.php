<?php

require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/services/TodolistService.php';
require_once __DIR__ . '/entity/Todolist.php';
require_once __DIR__ . '/views/TodolistView.php';
require_once __DIR__ . '/helpers/input.php';
require_once __DIR__ . '/config/Database.php';

use Config\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

$connection = Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();