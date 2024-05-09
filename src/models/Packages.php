<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Packages
{
    #[SerializedName('id')]
    public ?string $id;

    #[SerializedName('destination')]
    public ?string $destination;

    #[SerializedName('dataLimitInBytes')]
    public ?float $dataLimitInBytes;

    #[SerializedName('minDays')]
    public ?float $minDays;

    #[SerializedName('maxDays')]
    public ?float $maxDays;

    #[SerializedName('priceInCents')]
    public ?float $priceInCents;

    public function __construct(
        ?string $id = null,
        ?string $destination = null,
        ?float $dataLimitInBytes = null,
        ?float $minDays = null,
        ?float $maxDays = null,
        ?float $priceInCents = null
    ) {
        $this->id = $id;
        $this->destination = $destination;
        $this->dataLimitInBytes = $dataLimitInBytes;
        $this->minDays = $minDays;
        $this->maxDays = $maxDays;
        $this->priceInCents = $priceInCents;
    }
}
