<?php


namespace Source\App\Controllers\Admin;


use Source\App\Core\Controller;
use Source\Models\User;

class AdminController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct($router)
    {
        parent::__construct($router);

        $this->user = new User();
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

        $user = $this->user->login($user)->fetch();

        if(!$user) {
            echo json_encode($this->responseFail('Usuário ou senha informada está incorreta !'));
            die();
        }

        if(!$this->utils->password_verify($requestData->password, $user)) {
            echo json_encode($this->responseFail('Usuário ou senha informada está incorreta !'));
            die();
        }

        $this->session->set('user', [
            'iduser' => $user->iduser,
            'idperson' => $user->idperson,
            'deslogin' => $user->deslogin,
            'inadmin'   => $user->inadmin
        ]);

        $this->router->redirect('/admin/');
    }
}