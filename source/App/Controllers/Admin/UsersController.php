<?php


namespace Source\App\Controllers\Admin;


use League\Plates\Engine;
use Source\App\Core\Controller;
use Source\Models\User;

class UsersController extends Controller
{
    public $users;

    /**
     * @var User
     */
    private $dataLayerUser;

    private $view;

    public function __construct($router)
    {
        parent::__construct($router);

        $this->dataLayerUser = new User();

        $this->view = new Engine(__DIR__."/../../../../resources/views/");
    }

    public function index()
    {
        $this->users = $this->dataLayerUser->listAll();

        echo $this->view->render("admin/users/users", ['users' => $this->users]);
        die();
    }

    /**
     * @param array $request
     */
    public function create(array $request)
    {
        $this->files->setTemplateAdmin('users/users-create.php');
    }

    /**
     * @param array $request
     */
    public function edit(array $request)
    {
        $this->files->setTemplateAdmin('users/users-update.php');
    }
}