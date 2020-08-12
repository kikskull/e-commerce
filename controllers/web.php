<?php

namespace controllers;

class Web
{
    public function home($data)
    {
        echo "<h1>Home</h1>";
    }
    public function contact($data)
    {
        echo "<h1>Contatos</h1>";
    }
    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}