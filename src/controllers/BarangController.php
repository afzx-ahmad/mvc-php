<?php

class BarangController extends BaseController
{
    private $_barangModel;

    public function __construct()
    {
        $this->_barangModel = $this->model("BarangModel");
    }

    public function index(): void
    {
        $data = [
            "title" => "Barang",
            "barang" => $this->_barangModel->getAll()
        ];

        $this->view("templates/header", $data);
        $this->view("barang/index", $data);
        $this->view("templates/footer");
    }

    public function insert(): void
    {
        $data = [
            "title" => "Barang"
        ];

        $this->view("templates/header", $data);
        $this->view("barang/tambah", $data);
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
