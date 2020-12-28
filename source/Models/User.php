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
     * @var User
     */
    private $despassword;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct('tb_users', array(
            'idperson',
            'deslogin',
            'inadmin',
            'dtregister'
        ), 'iduser', false);

        $this->conn = Connect::getInstance();
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

    /**
     * @return false|\PDOStatement
     */
    public function listAll()
    {
        return $this->conn->query("SELECT 
            idperson, 
            iduser, 
            deslogin, 
            desperson, 
            desemail, 
            nrphone 
            FROM tb_users 
                INNER JOIN tb_persons USING(idperson) 
            ORDER BY desperson")->fetchAll();
    }
}