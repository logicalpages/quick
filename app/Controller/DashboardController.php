<?php declare(strict_types=1);

namespace GBU\Controller;
use GBU\Core\ResponseInterface;
use GBU\Core\RequestInterface;

class DashboardController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->template('page/dashboard');
        return $response;
    }
}