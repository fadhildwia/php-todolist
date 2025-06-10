<?php

function removeTodoList (int $numberTodoList): bool {
  global $todoList;
  if ($numberTodoList < 1 || $numberTodoList > count($todoList)) {
    echo "Todo not found!" . PHP_EOL;
    return false;
  }

  for($i = $numberTodoList - 1; $i < count($todoList) - 1; $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }
  unset($todoList[count($todoList) - 1]);

  return true;
}