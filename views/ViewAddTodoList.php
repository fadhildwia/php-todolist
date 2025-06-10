<?php

function viewAddTodoList() {
  $todo = input('Masukkan todo baru: ');

  if (!empty($todo)) {
    if (addTodoList($todo)) {
      echo "Todo berhasil ditambahkan: " . $todo . PHP_EOL;
      viewShowTodoList();
    } else {
      echo "Gagal menambahkan todo: " . $todo . PHP_EOL;
    }
  } else {
    echo "Todo tidak boleh kosong!" . PHP_EOL;
  }
}