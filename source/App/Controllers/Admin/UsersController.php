<?php

namespace Source\App\Controllers\Admin;

use Source\App\Core\Controller;
use Source\Models\User;

class UsersController extends Controller
{
    public $users;

    /**
     * @var User
     */
    private $dataLayerUser;

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
}