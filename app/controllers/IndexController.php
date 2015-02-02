<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->assets->addCss("css/style.css");
		$this->assets->addJs("js/main.js");
    }
    public function index2Action()
    {
    	$this->assets->addCss("css/style2.css");
		$this->assets->addJs("js/main2.js");	
    }

}

