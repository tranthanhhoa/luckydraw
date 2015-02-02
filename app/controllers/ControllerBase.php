<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	public function initialize()
	{
		$this->assets->addJs("js/jquery.js");
		$this->assets->addJs("js/jquery-migrate-1.2.1.min.js");
		$this->assets->addJs("js/jquery.tinysort.js");
	}
}
