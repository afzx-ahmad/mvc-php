<?php

class BarangController extends BaseController
{
    public function index(): void
    {
        $data = [
            "title" => "Home"
        ];

        $this->view("templates/header", $data);
        $this->view("barang/index", $data);
        $this->view("templates/footer");
    }

    public function edit($param): void
    {
        $data = [
            "title" => "Barang",
            "param" => $param
        ];

        $this->view("templates/header", $data);
        $this->view("barang/edit", $data);
        $this->view("templates/footer");
    }
}
