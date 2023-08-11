<?php declare(strict_types=1);

namespace GBU\Core;

use GBU\Controller\ActionInterface;

interface RouterInterface
{

    public function pageNotFound(string $callback);

    public function get(string $path, string $callback): void;
    public function dispatch(RequestInterface $request): ActionInterface;
}
