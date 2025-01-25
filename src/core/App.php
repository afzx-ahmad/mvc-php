<?php

class App
{
    private $_controllerFile = "DefaultApp";

    private $_controllerMethod = "index";

    private $_parameter = [];

    private const DEFAULT_GET = "GET";

    private const DEFAULT_POST = "POST";

    private $_handlers = [];

    public function setDefaultController(string $controller): void
    {
        $this->_controllerFile = $controller;
    }

    public function setDefaultMethod(string $method): void
    {
        $this->_controllerMethod = $method;
    }

    public function get(string $url, array $callback): void
    {
        $this->_setHandler(self::DEFAULT_GET, $url, $callback);
    }

    public function post(string $url, array $callback): void
    {
        $this->_setHandler(self::DEFAULT_POST, $url, $callback);
    }

    private function _setHandler(string $method, string $path, array $handler): void
    {
        $this->_handlers[$method . $path] = [
            "path" => $path,
            "method" => $method,
            "handler" => $handler
        ];

    }


    public function run(): void
    {
        $execute = 0;
        $url = $this->_getUrl();
        $requestMethod = $_SERVER["REQUEST_METHOD"];


        foreach ($this->_handlers as $handler) {
            $path = explode("/", ltrim(rtrim($handler["path"], "/"), "/"));
            $keyUrl = (isset($url[0]) ? $url[0] : "") . (isset($url[1]) ? $url[1] : "");
            $keyPath = (isset($path[0]) ? $path[0] : "") . (isset($path[1]) ? $path[1] : "");

            if ($keyUrl != "" && $keyUrl == $keyPath && $requestMethod == $handler["method"]) {
                if (isset($handler["handler"][0]) && file_exists(__DIR__ . "/../controllers/" . $handler["handler"][0] . ".php")) {
                    $this->_controllerFile = $handler["handler"][0];
                    unset($url[0]);
                }

                include_once __DIR__ . "/../controllers/". $this->_controllerFile . ".php";
                $this->_controllerFile = new $this->_controllerFile();
                $execute = 1;

                if (isset($handler["handler"][1]) && method_exists($this->_controllerFile, $handler["handler"][1])) {
                    $this->_controllerMethod = $handler["handler"][1];
                    unset($url[1]);
                }
            }
        }


        if ($execute == 0) {
            include_once __DIR__ . "/../controllers/". $this->_controllerFile . ".php";
            $this->_controllerFile = new $this->_controllerFile();
        }


        if (!empty($url)) {
            $this->_parameter = array_values($url);
        }

        call_user_func([$this->_controllerFile, $this->_controllerMethod], $this->_parameter);

    }

    private function _getUrl(): array
    {
        $url = rtrim($_SERVER["QUERY_STRING"], "/");

        $url = filter_var($url, FILTER_SANITIZE_URL);

        $url = explode("/", $url);

        return $url;
    }
}
