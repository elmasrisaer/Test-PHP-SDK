<?php

declare(strict_types=1);

namespace Celitech;

use Celitech\Services;

class Client
{
    public $Destinations;
    public $Packages;
    public $Purchases;
    public $ESim;

    public function __construct(string $environment = Environment::Default)
    {
        $this->Destinations = new Services\Destinations($environment);
        $this->Packages = new Services\Packages($environment);
        $this->Purchases = new Services\Purchases($environment);
        $this->ESim = new Services\ESim($environment);
    }

    public function setBaseUrl(string $url)
    {
        $this->Destinations->setBaseUrl($url);
        $this->Packages->setBaseUrl($url);
        $this->Purchases->setBaseUrl($url);
        $this->ESim->setBaseUrl($url);
    }
}

// c029837e0e474b76bc487506e8799df5e3335891efe4fb02bda7a1441840310c
