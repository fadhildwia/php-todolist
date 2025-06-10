<?php

function input(string $message): string {
    echo $message;
    return trim(fgets(STDIN));
}