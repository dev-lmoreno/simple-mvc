<?php

namespace App\Http;

class Response {

    /**
     * Código do Status HTTP
     * @var integer
     */
    private int $httpCode = 200;

    /**
     * Cabeçalho do Response
     * @var array
     */
    private array $headers = [];

    /**
     * Tipo de conteúdo que está sendo retornado
     * @var string
     */
    private string $contentType = 'text/html';

    /**
     * Conteúdo do Response
     * @var mixed
     */
    private $content;

    /**
     * Método responsável por iniciar a classe e definir os valores
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct(int $httpCode, $content, string $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content  = $content;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o conten type do response
     * @param string $contentType
     */
    public function setContentType(string $contentType): void
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value): void
    {
        $this->headers[$key] = $value;
    }

    /**
     * Método responsável por enviar os headers para o navegador
     */
    private function sendHeaders(): void
    {
        // DEFINIR OS STATUS
        http_response_code($this->httpCode);

        // ENVIAR HEADERS
        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    /**
     * Método responsável por enviar a resposta para o usuário
     */
    public function sendResponse(): void
    {
        // ENVIA OS HEADERS
        $this->sendHeaders();

        // DEFINE O CONTEÚDO
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
