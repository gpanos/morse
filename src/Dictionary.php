<?php

namespace Morse;

class Dictionary
{
    protected $alphabet = [
        'a' => '.-',
        'b' => '-...',
        'c' => '-.-.',
        'd' => '-..',
        'e' => '.',
        'f' => '..-.',
        'g' => '--.',
        'h' => '....',
        'i' => '..',
        'j' => '.---',
        'k' => '-.-',
        'l' => '.-..',
        'm' => '--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'q' => '--.-',
        'r' => '.-.',
        's' => '...',
        't' => '-',
        'u' => '..-',
        'v' => '...-',
        'w' => '.--',
        'x' => '-..-',
        'y' => '-.--',
        'z' => '--..',
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        '.' => '.-.-.-',
        ',' => '--..--',
        '?' => '..--..',
        '/' => '-..-.',
        ' ' => '/',
    ];

    public function translate(string $message)
    {
        $morse = '';
        $parts = str_split(strtolower(trim($message)));

        foreach ($parts as $char) {
            if (isset($this->alphabet[$char])) {
                $morse .= $this->alphabet[$char];
            }
            $morse .= ' ';
        }

        return trim($morse);
    }
}
