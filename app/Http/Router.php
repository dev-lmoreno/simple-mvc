<?php

namespace App\Http;

class Router {

    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private string $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private string $prefix = '';

    /**
     * Índice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instância de Request
     * @var Request
     */
    private Request $request;

    /**
     * Método responsável por iniciar a classe
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->request = new Request();
        $this->url     = $url;
        $this->setPrefix();
    }

    /**
     * Método responsável por definir o prefixo das rotas
     */
    private function setPrefix()
    {   
        // INFORMAÇÕES DA URL ATUAL
        $parseUrl = parse_url($this->url);

        // DEFINE O PREFIXO
        $this->prefix = $parseUrl['path'] ?? '';
    }

}
