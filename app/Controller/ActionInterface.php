<?php declare(strict_types=1);

namespace GBU\Controller;
use GBU\Core\RequestInterface;
use GBU\Core\ResponseInterface;

interface ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface;
}