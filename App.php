<?php

require_once __DIR__ . '/models/TodoList.php';
require_once __DIR__ . '/controllers/ShowTodoList.php';
require_once __DIR__ . '/controllers/AddTodoList.php';
require_once __DIR__ . '/controllers/RemoveTodoList.php';
require_once __DIR__ . '/views/ViewShowTodoList.php';
require_once __DIR__ . '/views/ViewAddTodoList.php';
require_once __DIR__ . '/views/ViewRemoveTodoList.php';
require_once __DIR__ . '/helpers/input.php';

echo "Aplikasi TodoList" . PHP_EOL;
echo "===================" . PHP_EOL;
echo addTodoList("Beli susu") . PHP_EOL;
echo addTodoList("Beli roti") . PHP_EOL;
echo viewShowTodoList() . PHP_EOL;