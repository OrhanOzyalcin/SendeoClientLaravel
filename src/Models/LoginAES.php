<?php

namespace SendeoClientLaravel\Models;

class LoginAES
{
    public string $musteri;
    public string $sifre;

    public function __construct(string $musteri, string $sifre)
    {
        $this->musteri = $musteri;
        $this->sifre = $sifre;
    }
}
