<?php declare(strict_types=1);

namespace GBU\Core;

interface ResponseInterface
{
    public function template(string $name, array $vars=[]): void;
    public function render(): void;
}