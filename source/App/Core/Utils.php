<?php


namespace Source\App\Core;


use Source\Models\Persons;
use Source\Models\User;

class Utils
{

    /**
     * @param string $password
     * @param User $user
     * @return bool
     */
    public function password_verify(string $password, User $user)
    {
        return password_verify($password, $user->despassword);
    }

    /**
     * @param string $email
     * @return bool
     */
    public function validatedEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $password
     * @return bool|string
     */
    public function validatingPasswordForce(string $password): ?bool
    {
        if(mb_strlen($password) < PASSWORD_LENGTH) {
            return false;
        }

        return true;
    }

    /**
     * @param string $password
     * @return false|string|null
     */
    public function hashGeneratedPassword(string $password)
    {
        return password_hash($password, PASSWORD_DEFAULT, ["cost"=>12]);
    }

    /**
     * @param string $email
     * @return bool
     */
    public function verifyUniqueEmail(string $email)
    {
        $person = new Persons();

        if($person->find("desemail: desemail", "desemail=$email")->fetch()) {
            return false;
        }

        return true;
    }

    /**
     * @param string $deslogin
     * @return bool
     */
    public function verifyLogin(string $deslogin)
    {
        $user = new User();

        if($user->find("deslogin = :deslogin", "deslogin=$deslogin")->fetch()) {
            return false;
        }

        return true;
    }

}