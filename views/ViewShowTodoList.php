<?php

function viewShowTodoList() {
    global $todoList;
    
    if (empty($todoList)) {
        echo "Tidak ada todo saat ini." . PHP_EOL;
    } else {
        echo "Daftar Todo:" . PHP_EOL;
        foreach ($todoList as $index => $value) {
            echo ($index + 1) . ". " . $value['title'] . PHP_EOL;
        }
    }
    echo "===================" . PHP_EOL;
    echo "Ketik 1 untuk menambahkan todo baru" . PHP_EOL;
    echo "Ketik 2 untuk mengahpus todo berdasarkan nomor" . PHP_EOL;
    echo "Ketik X untuk keluar" . PHP_EOL;

    $input = input("Masukkan pilihan Anda: ");

    if ($input === '1') {
      viewAddTodoList();
    } else if ($input === '2') {
      viewRemoveTodoList();
    } else if (strtolower($input) === 'x') {
      echo "Terima kasih sudah menggunakan todo list ini" . PHP_EOL;
      exit;
    } else {
      echo "Pilihan tidak valid!" . PHP_EOL;
    }
}