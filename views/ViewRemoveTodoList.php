<?php

function viewRemoveTodoList() {
  $numberTodo = input('Masukkan nomor todo yang ingin dihapus: ');

  $numberTodo = (int)$numberTodo;
  if (!empty($numberTodo) && is_numeric($numberTodo)) {
    if (removeTodoList($numberTodo)) {
      echo "Todo nomor " . $numberTodo . " berhasil dihapus." . PHP_EOL;
      
    } else {
      echo "Gagal menghapus todo nomor " . $numberTodo . ". Pastikan nomor tersebut valid." . PHP_EOL;
    }
    viewShowTodoList();
  }
}