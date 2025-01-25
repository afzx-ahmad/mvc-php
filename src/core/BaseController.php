<?php

class BaseController
{
    public function view(string $view, array $data = []): void
    {
        if (count($data)) {
            extract($data);
        }

        require_once __DIR__ . "/../views/$view.php";
    }

    public function redirect(string $url): void
    {
        header("Location: $url");
        exit;
    }

    public function model(string $model): object
    {
        require_once __DIR__ . "/../models/$model.php";
        return new $model();
    }
}
