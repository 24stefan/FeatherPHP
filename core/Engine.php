<?php
namespace FeatherPHP\Core;

class Engine {
    private string $viewsPath;

    public function __construct(string $viewsPath) {
        $this->viewsPath = rtrim($viewsPath, '/');
    }

    public function render(string $view, array $data = []): string {
        $fullPath = $this->viewsPath . '/' . $view;
        if (!file_exists($fullPath)) {
            return "<h1>View not found: $view</h1>";
        }
        extract($data);
        ob_start();
        include $fullPath;
        return ob_get_clean();
    }
}
