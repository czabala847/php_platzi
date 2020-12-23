<?php

namespace App\Http;

class Request
{

    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
        $route = isset($_GET["route"]) ? $_GET["route"] : "home";
        $this->segments = explode("/", $route);

        $this->setController();
        $this->setMethod();
    }

    public function setController()
    {
        $this->controller = $this->segments[0];
    }

    public function setMethod()
    {
        $this->method = empty($this->segments[1])
            ? 'index'
            : $this->segments[1];
    }

    public function getController()
    {
        $controller = ucfirst($this->controller);

        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function send()
    {
        $controller = $this->getController();
        $method = $this->getMethod();

        $response = call_user_func([
            new $controller .
                $method
        ]);

        $response->send();
    }
}
