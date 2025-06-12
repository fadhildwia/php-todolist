<?php

namespace Helper {
    class InputHelper
    {
        static function input(string $message): string
        {
            echo $message;
            return trim(fgets(STDIN));
        }
    }
}
