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

    public function safe(): ?array
    {
        return parent::safe();
    }

    /**
     * @param string $user
     * @return User|null
     */
    public function login(string $user): ?User
    {
        $user = $this->find("deslogin = :user AND inadmin = :admin", "user=$user&inadmin=1");

        if(!$user) return null;

        return $user;
    }
}