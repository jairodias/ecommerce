<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Persons extends DataLayer
{

    public function __construct()
    {
        parent::__construct('tb_persons', [
            'desperson',
            'desemail',
            'nrphone',
            'dtregister'
        ], 'idperson', false);
    }
}