<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	public function initialize()
	{
		$this->assets->addCss("css/style.css");
		$this->assets->addJs("js/main.js");
	}
}
