<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Destinations
{
    #[SerializedName('name')]
    public ?string $name;

    #[SerializedName('destination')]
    public ?string $destination;

    /**
     * @var string[]|null
     */
    #[SerializedName('supportedCountries')]
    public ?array $supportedCountries;

    public function __construct(?string $name = null, ?string $destination = null, ?array $supportedCountries = [])
    {
        $this->name = $name;
        $this->destination = $destination;
        $this->supportedCountries = $supportedCountries;
    }
}
