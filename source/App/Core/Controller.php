<?php


namespace Source\App\Core;

use League\Plates\Engine;
use Source\App\Core\Session;
use Source\App\Core\Utils;

class Controller
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Files
     */
    protected $files;

    /**
     * @var Utils
     */
    protected $utils;

    protected $view;

    /**
     * Controller constructor.
     * @param $router
     */
    public function __construct($router)
    {
        $this->session = (new Session())->regenerate();
        $this->utils = new Utils();
        $this->files = new Files($router);
        $this->router = $router;

        $this->view = new Engine(__DIR__."/../../../resources/views");
    }

    /**
     * @param string $message
     * @return object
     */
    public function responseFail(string $message): object
    {
        $this->session->set('exception', $message);

        return (object) [
            'success'   =>  false,
            'message'   => $message,
            'uuid'      => md5(uniqid(rand(), true))
        ];
    }

    /**
     * @param array|null $data
     * @param string $message
     * @return object
     */
    public function responseOk(?array $data = [], string $message = 'OK'): object
    {
        return (object) [
            'success'   =>  true,
            'message'   => $message,
            'data'  => $data,
            'uuid'  => md5(uniqid(rand(), true))
        ];
    }
}