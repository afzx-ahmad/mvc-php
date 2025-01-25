<?php

class KategoriController extends BaseController
{
    public function index(): void
    {
        $data = [
            "title" => "Kategori"
        ];

        $this->view("templates/header", $data);
        $this->view("kategori/index", $data);
        $this->view("templates/footer");
    }
}
