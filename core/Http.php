<?php
namespace FeatherPHP\Core;

class Request {
    public $method;
    public $path;
    public $query = [];
    public $body;
    public $headers = [];

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $this->query = $_GET;
        $this->body = file_get_contents('php://input');
        $this->headers = getallheaders() ?: [];
    }
}

class Response {
    protected $status = 200;
    protected $headers = ['Content-Type' => 'text/html; charset=utf-8'];
    protected $body = '';

    public function setStatus(int $code) { $this->status = $code; }
    public function header(string $name, string $value) { $this->headers[$name] = $value; }
    public function write(string $text) { $this->body .= $text; }
    public function json($data) {
        $this->header('Content-Type', 'application/json; charset=utf-8');
        $this->write(json_encode($data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));
    }

    public function send() {
        if (!headers_sent()) {
            http_response_code($this->status);
            foreach ($this->headers as $k => $v) header("$k: $v");
        }
        echo $this->body;
    }
}
