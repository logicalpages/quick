<?php declare(strict_types=1);

namespace GBU\Core;

use GBU\Controller\DashboardController;
use GBU\Controller\InvoicesController;
use GBU\Controller\SettingsController;
use GBU\Controller\PageNotFoundController;

class RoutesList
{
    public function configure(RouterInterface $router): void
    {
        $router->get('/', DashboardController::class);
        $router->get('/invoices', InvoicesController::class);
        $router->get('/settings', SettingsController::class);
       // $router->get('/404', PageNotFoundController::class);
        $router->pageNotFound(PageNotFoundController::class);
        
    }
}
