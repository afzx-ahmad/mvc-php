<?php

class DefaultApp extends BaseController
{
    public function index(): void
    {
        $data = [
            "title" => "Home"
        ];

        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}
