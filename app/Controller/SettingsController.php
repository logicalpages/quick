<?php declare(strict_types=1);

namespace GBU\Controller;
use GBU\Core\ResponseInterface;
use GBU\Core\RequestInterface;


class SettingsController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->template('page/settings');
        return $response;
    }
}
