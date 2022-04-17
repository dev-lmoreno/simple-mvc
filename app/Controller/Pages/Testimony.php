<?php

namespace App\Controller\Pages;

Use \App\Utils\View;

class Testimony extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) de depoimentos
     * @return string
     */
    public static function getTestimonies()
    {
        // VIEW DOS DEPOIMENTOS
        $content =  View::render('pages/testimonies',[
            
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('DEPOIMENTOS > DEVLMORENO', $content);
    }

}
