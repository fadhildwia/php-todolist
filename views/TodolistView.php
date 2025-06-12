<?php

namespace View {

  use Helper\InputHelper;
  use Service\TodolistService;

  class TodolistView
  {
    private TodolistService $todolistService;

    public function __construct($todolistService)
    {
      $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
      $this->todolistService->showTodolist();

      echo "\n===================" . PHP_EOL;
      echo "Ketik 1 untuk menambahkan todo baru" . PHP_EOL;
      echo "Ketik 2 untuk mengahpus todo berdasarkan nomor" . PHP_EOL;
      echo "Ketik X untuk keluar" . PHP_EOL;

      $input = InputHelper::input("Masukkan pilihan Anda: ");

      if ($input === '1') {
        $this->addTodolist();
      } else if ($input === '2') {
        $this->removeTodolist();
      } else if (strtolower($input) === 'x') {
        echo "Terima kasih sudah menggunakan todo list ini" . PHP_EOL;
        exit;
      } else {
        echo "Pilihan tidak valid!" . PHP_EOL;
      }
    }

    function addTodolist(): void
    {
      $todo = InputHelper::input('Masukkan todo baru: ');

      $this->todolistService->addTodolist($todo);
      $this->showTodolist();
    }

    function removeTodolist(): void
    {
      $number = InputHelper::input('Masukkan nomor todo yang ingin dihapus: ');

      $number = (int)$number;
      $this->todolistService->removeTodolist($number);
      $this->showTodolist();
    }
  }
}
