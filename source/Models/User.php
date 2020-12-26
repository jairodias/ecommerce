<?php


namespace Source\Models;


use CoffeeCode\DataLayer\Connect;
use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    /**
     * @var Connect
     */
    private $conn;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct('tb_users', array(
            'id_person',
            'deslogin',
            'despassword',
            'inadmin',
            'dtregister'
        ), 'iduser', false);

        $this->conn = Connect::getInstance();
    }

    /**
     * @param string $user
     * @param string $password
     * @return User|null
     */
    public function login(string $user, string $password): ?User
    {
        $user = $this->find("deslogin = :user", $user);

        if(!$user) return null;

        return $user;
    }
}