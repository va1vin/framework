<?php
 namespace Project\Controllers;
 use \Core\Controller;

 class TestController extends Controller{
    public function act1()
    {$this->title = 'типо тест1';
        echo 'типо вывел че нибудь';
    }
    public function act2()
    {$this->title = 'типо тест2';
        echo 'типо DA ченибудь';
    }public function act3()
    {$this->title = 'типо тест3';
        echo 'типо не вывел че нибудь';
    }
 }