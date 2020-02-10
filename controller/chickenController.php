<?php

class ChickenController
{
    private $_f3;

    public function __construct($_f3)
    {
        $this->_f3;
    }

    public function home()
    {
        $view = new Template();
        echo $view->render('views/allAboutChickens.html');
    }

    public function eggs()
    {
        $view = new Template();
        echo $view->render('views/eggs.html');
    }
}