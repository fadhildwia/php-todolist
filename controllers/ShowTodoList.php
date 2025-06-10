<?php

function showTodoList() {
  global $todoList;

  echo "Daftar Todo:" . PHP_EOL;
  foreach ($todoList as $index => $value) {
    echo ($index + 1) . ". " . $value['title'] . PHP_EOL;
  }
}