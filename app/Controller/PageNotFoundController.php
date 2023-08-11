<?php declare(strict_types=1);

namespace GBU\Controller;
use GBU\Core\ResponseInterface;
use GBU\Core\RequestInterface;

class PageNotFoundController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        http_response_code(404);
        $response->template('page/pagenotfound');
        return $response;
    }
}