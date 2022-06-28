<?php

namespace App;

use App\Exceptions\ViewNotFoundexception;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . 'php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        foreach ($this->params as $key => $value) {
            $$key = $value;
        }

        include $viewPath;
    }

    public function __toString()
    {
        return $this->render();
    }
}
