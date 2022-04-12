<?php

namespace App\Controller\Pages;

Use \App\Utils\View;
Use \App\Model\Entity\Company;

class About extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página de Sobre
     * @return string
     */
    public static function getAbout()
    {
        $company = new Company;
        // VIEW DO ABOUT
        $content =  View::render('pages/about',[
            'name' => $company->name,
            'description' => $company->description,
            'site' => $company->site
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('SOBRE > DEVLMORENO', $content);
    }

}
