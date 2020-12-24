<?php


namespace Source\App\Controllers;


use Source\App\Core\Session;

class IndexController
{
    /**
     * @var Session
     */
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function index()
    {

    }
}