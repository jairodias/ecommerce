<?php


namespace Source\App\Controllers\Admin;


use League\Plates\Engine;
use Source\App\Core\Controller;
use Source\Models\User;

class AdminController extends Controller
{
    /**
     * @var User
     */
    private $user;

    private $view;


    /**
     * AdminController constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        $this->user = new User();

        $this->view = new Engine(__DIR__."/../../../../resources/views/");
    }

    public function index()
    {
        echo $this->view->render("admin/content");
        die();
    }

    public function showLogin()
    {
        require __DIR__ . "/../../../../resources/views/admin/login.php";
    }

    /**
     * @param array $request
     */
    public function login(array $request)
    {
        $requestData = (object) $request;

        $user = filter_var($requestData->user, FILTER_SANITIZE_SPECIAL_CHARS);

        $user = $this->user->login($user)->fetch();

        if(!$user || !$this->utils->password_verify($requestData->password, $user)) {
          $this->responseFail('Usuário ou senha informada está incorreta !');
        }

        $this->session->set('user', [
            'iduser' => $user->iduser,
            'idperson' => $user->idperson,
            'deslogin' => $user->deslogin,
            'inadmin'   => $user->inadmin
        ]);

        $this->router->redirect('/admin/');
    }

    public function logout()
    {
        $this->session->destroy();

        $this->router->redirect('/admin/login');
    }
}