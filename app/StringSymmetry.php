<?php

namespace App;

class StringSymmetry
{
    public string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function convertData(): array
    {
        return str_split($this->data);
    }
}