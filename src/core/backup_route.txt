<?php

class Route
{
    private $_controllerFile = "DefaultApp";

    private $_controllerMethod = "Index";

    private $_parameter = [];

    public function run()
    {
        $url = $this->_getUrl();

        if ($url && file_exists(__DIR__ . "/../controllers/" . $url[0] . ".php")) {
            $this->_controllerFile = $url[0];
            unset($url[0]);
        }


        include_once __DIR__ . "/../controllers/". $this->_controllerFile . ".php";

        $this->_controllerFile = new $this->_controllerFile();

        if ($url[1] && method_exists($this->_controllerFile, $url[1])) {
            $this->_controllerMethod = $url[1];
            unset($url[1]);
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
