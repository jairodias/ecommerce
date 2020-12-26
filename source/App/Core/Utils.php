<?php


namespace Source\App\Core;


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
}