<?php

require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/services/TodolistService.php';
require_once __DIR__ . '/entity/Todolist.php';
require_once __DIR__ . '/views/TodolistView.php';
require_once __DIR__ . '/helpers/input.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();