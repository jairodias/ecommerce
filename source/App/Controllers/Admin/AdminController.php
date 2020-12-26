<?php


namespace Source\App\Controllers\Admin;


use Source\App\Core\Controller;
use Source\App\Core\Files;
use Source\App\Core\Session;
use Source\App\Core\Utils;
use Source\Models\User;

class AdminController extends Controller
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var Files
     */
    private $files;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Utils
     */
    private $utils;

    public function __construct()
    {
        $this->session = (new Session())->regenerate();

        $this->files = new Files();

        $this->user = new User();

        $this->utils = new Utils();
    }

    public function index()
    {
        $this->files->setTemplateAdmin('content.php');
    }

    public function showLogin()
    {
        require __DIR__ . "/../../../../resources/views/admin/login.php";
    }

    public function login(array $request)
    {
        $requestData = (object) $request;

        $user = filter_var($requestData->user, FILTER_SANITIZE_SPECIAL_CHARS);

        $user = $this->user->login($user, $requestData->password);

        if(!$user) {

        }

        $this->utils->password_verify($requestData->password, $user->despassword);
    }
}