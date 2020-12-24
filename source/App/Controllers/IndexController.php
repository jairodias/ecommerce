<?php


namespace Source\App\Controllers;


use Source\App\Core\Files;
use Source\App\Core\Session;

class IndexController
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var Files
     */
    private $files;


    public function __construct()
    {
        $this->session = (new Session())->regenerate();

        $this->files = new Files();
    }

    public function index()
    {
        $this->files->set('index.php');
    }
}