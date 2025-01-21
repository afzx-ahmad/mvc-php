<?php

class Barang
{
    public function index()
    {
        echo "Helo from Barnag -> index";
    }

    public function edit($param)
    {
        echo "Helo from Barnag -> edit <br>";
        echo "param value = <br>";
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
}
