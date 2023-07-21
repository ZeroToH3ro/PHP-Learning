<?php

namespace app\core;

class Router
{
    public Request $request;
    protected array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function get($path, $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve() : string
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false){
            echo 'Not found';
            exit();
        }
        if(is_string($callback)){
            echo $this->renderView($callback);
            exit();
        }
        echo $callback();
    }
    public function renderView($view): string
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent(): bool|string
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view): bool|string
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/{$view}.php";
        return ob_get_clean();
    }


}