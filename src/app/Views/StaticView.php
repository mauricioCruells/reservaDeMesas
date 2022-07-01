<?php

namespace App\Views;

use App\Exceptions\ViewNotFoundexception;

class StaticView implements View
{
    public function __construct(
        protected string $view,
        protected array $params = []
    ) {
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        foreach ($this->params as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include $viewPath;

        return (string) ob_get_clean();
    }

    public static function make(string $view, array $params = [])
    {
        return new static($view, $params);
    }

    public function __toString()
    {
        return $this->render();
    }
}
