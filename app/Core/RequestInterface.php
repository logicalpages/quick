<?php declare(strict_types=1);

namespace GBU\Core;

interface RequestInterface
{
    public function getPath(): string;
    public function getMethod(): string;

    public function getParam(string $string):mixed;
    public function getParams():array;
    public function getQuery():?string;
    public function getQueryParams(): array;
}
