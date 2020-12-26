<?php


namespace Source\App\Core;


use function Sodium\randombytes_random16;

class Controller
{
    public function exception(string $message)
    {
        return (object) [
            'success'   =>  false,
            'message'   => $message,
            'uuid'      => randombytes_random16()
        ];
    }

    /**
     * @param array $data
     * @param string|null $message
     */
    public function responseOk(array $data, ?string $message)
    {

    }
}