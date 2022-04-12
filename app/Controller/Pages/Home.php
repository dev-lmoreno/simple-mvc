<?php

namespace App\Controller\Pages;

Use \App\Utils\View;
Use \App\Model\Entity\Company;

class Home extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa Home
     * @return string
     */
    public static function getHome()
    {
        $company = new Company;
        // VIEW DA HOME
        $content =  View::render('pages/home',[
            'name' => $company->name
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('HOME > DEVLMORENO', $content);
    }

}
