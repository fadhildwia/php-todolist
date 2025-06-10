<?php

function addTodoList(string $todo) {
  global $todoList;

  if (empty($todo)) {
    echo "Todo tidak boleh kosong!" . PHP_EOL;
  }

  $todoList[] = [
    'title' => $todo,
    'completed' => false
  ];

  return "Todo '$todo' berhasil ditambahkan!" . PHP_EOL;
}