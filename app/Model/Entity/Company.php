<?php

namespace App\Model\Entity;

class Company{

    // inicialmente exemplo de retorno do banco de dados

    /**
     * ID da empresa
     * @var integer
     */
    public $id = 1;

    /**
     * Nome da empresa
     * @var string
     */
    public $name = 'Devlmoreno';

    /**
     * Site da empresa
     * @var string
     */
    public $site = "https://github.com/dev-lmoreno";

    /**
     * Descrição da empresa
     * @var string
     */
    public $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Odit laboriosam aperiam dolore magnam et possimus inventore voluptatibus consequuntur fugit nihil 
    laudantium excepturi nemo, quam distinctio veritatis! Nobis eum ut quis!';
}