<?php

namespace Source\App\Controllers\Admin;

use Carbon\Carbon;
use Source\App\Core\Controller;
use Source\Models\Persons;
use Source\Models\User;

class UsersController extends Controller
{
    public $users;

    /**
     * @var User
     */
    private $dataLayerUser;

    /**
     * @var Persons
     */
    private $dataLayerPersons;

    public function __construct($router)
    {
        parent::__construct($router);

        $this->dataLayerUser = new User();
    }

    public function index()
    {
        $this->users = $this->dataLayerUser->listAll();

        echo $this->view->render("admin/users/users", ['users' => $this->users]);
        die();
    }


    public function create()
    {
        echo $this->view->render("admin/users/create");
        die();
    }

    /**
     * @param array $request
     */
    public function edit(array $request)
    {
        var_dump($request);
       // $this->files->setTemplateAdmin('users/users-update.php');
    }

    public function store(array $request)
    {
        $requestData = (object) $request;

        if(!$this->utils->validatedEmail($requestData->desemail) || !$this->utils->verifyUniqueEmail($requestData->desemail)) {
            $this->session->set('exception', 'Email digitado é inválido !');
            $this->router->redirect('/admin/users/create');
            die();
        }

        if(!$this->utils->validatingPasswordForce($requestData->despassword)) {
            $this->session->set('exception',  'Senha deve conter no mínimo ' . PASSWORD_LENGTH . ' caracters');
            $this->router->redirect('/admin/users/create');
            die();
        }

        if(!$this->utils->verifyLogin($requestData->deslogin)) {
            $this->session->set('exception', 'Login digitado é inválido !');
            $this->router->redirect('/admin/users/create');
            die();
        }

        $person = new Persons();
        $person->desperson = $requestData->desperson;
        $person->nrphone = $requestData->nrphone;
        $person->desemail = $requestData->desemail;
        $person->dtregister = Carbon::now();
        $person->save();

        $user = new User();

        $user->idperson =  $person->idperson;
        $user->deslogin = $requestData->deslogin;
        $user->despassword = $this->utils->hashGeneratedPassword($requestData->despassword);
        $user->inadmin = $requestData->inadmin;
        $user->dtregister = Carbon::now();
        $user->save();

        $this->session->set('success', 'Usuário criado com sucesso !');
        $this->router->redirect('/admin/users/create');
        die();
    }
}