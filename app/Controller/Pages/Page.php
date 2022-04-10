<?php

namespace App\Controller\Pages;

Use \App\Utils\View;

class Page {

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader(): string
    {
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar o rodapé da página
     * @return string
     */
    private static function getFooter(): string
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página genérica
     * @return string
     */
    public static function getPage(string $title, string $content): string
    {
        return View::render('pages/page',[
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }

}
