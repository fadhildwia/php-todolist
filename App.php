<?php

require_once 'models/TodoList.php';
require_once 'controllers/ShowTodoList.php';
require_once 'controllers/AddTodoList.php';
require_once 'controllers/RemoveTodoList.php';
require_once 'views/ViewShowTodoList.php';
require_once 'views/ViewAddTodoList.php';
require_once 'views/ViewRemoveTodoList.php';
require_once 'helpers/input.php';

echo "Aplikasi TodoList" . PHP_EOL;
echo "===================" . PHP_EOL;
echo addTodoList("Beli susu") . PHP_EOL;
echo addTodoList("Beli roti") . PHP_EOL;
echo viewShowTodoList() . PHP_EOL;