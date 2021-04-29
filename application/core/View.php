<?php

namespace application\core;

class View
{

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route)
	{
		$this->route = $route;
	}

	public function render($view = null, $title, $vars = [])
	{
		extract($vars);
		$this->setPath($view);
		$path = 'application/views/' . $this->getPath() . '.php';
		if (file_exists($path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/' . $this->layout . '.php';
		}
	}

	private function setPath($view)
	{
		if ($view == null) {
			$this->path = $this->route['controller'] . '/' . $this->route['action'];
		} else {
			$this->path = $view;
		}
	}
	private function getPath()
	{
		return $this->path;
	}
	public function redirect($url)
	{
		header('location: ' . $url);
		exit;
	}

	public static function errorCode($code)
	{
		http_response_code($code);
		$path = 'application/views/errors/' . $code . '.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

	public function message($status, $message)
	{
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url)
	{
		exit(json_encode(['url' => $url]));
	}
}
