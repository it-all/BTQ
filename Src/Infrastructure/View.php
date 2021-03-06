<?php
declare(strict_types=1);

namespace It_All\BoutiqueCommerce\Src\Infrastructure;

use Slim\Container;

class View
{
    protected $container; // dependency injection container

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {
        return $this->container->{$name};
    }

    public function pageNotFound($request, $response)
    {
        return $this->view->render(
            $response,
            'frontend/pageNotFound.twig',
            ['title' => 'BoutiqueCommerce', 'pageType' => 'public']
        );
    }
}
