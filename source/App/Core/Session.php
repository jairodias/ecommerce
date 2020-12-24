<?php

namespace Source\App\Core;

class Session
{
    public function __construct()
    {
        if(!session_id()) {
            session_save_path(PATH_SESSION);
            session_start();
        }
    }
}