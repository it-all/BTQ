<?php
declare(strict_types=1);

namespace It_All\BoutiqueCommerce\Src\Infrastructure;

use It_All\BoutiqueCommerce\Src\Domain\NavAdmin;
use It_All\BoutiqueCommerce\Src\Infrastructure\UserInterface\FormHelper;
use Slim\Container;

class AdminView
{
    protected $container; // dependency injection container
    protected $navigationItems;

    public function __construct(Container $container)
    {
        $this->container = $container;

        // Instantiate navigation navbar contents
        $navAdmin = new NavAdmin($container);
        $this->navigationItems = $navAdmin->getSectionsForUser($container->authorization);
    }

    public function __get($name)
    {
        return $this->container->{$name};
    }
}
