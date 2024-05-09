<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Package
{
    #[SerializedName('id')]
    public ?string $id;

    #[SerializedName('dataLimitInBytes')]
    public ?float $dataLimitInBytes;

    #[SerializedName('destination')]
    public ?string $destination;

    #[SerializedName('destinationName')]
    public ?string $destinationName;

    #[SerializedName('priceInCents')]
    public ?float $priceInCents;

    public function __construct(
        ?string $id = null,
        ?float $dataLimitInBytes = null,
        ?string $destination = null,
        ?string $destinationName = null,
        ?float $priceInCents = null
    ) {
        $this->id = $id;
        $this->dataLimitInBytes = $dataLimitInBytes;
        $this->destination = $destination;
        $this->destinationName = $destinationName;
        $this->priceInCents = $priceInCents;
    }
}
