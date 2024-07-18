<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Packages
{
    /**
     * ID of the package
     */
    #[SerializedName('id')]
    public ?string $id;

    /**
     * ISO representation of the package's destination
     */
    #[SerializedName('destination')]
    public ?string $destination;

    /**
     * Size of the package in Bytes
     */
    #[SerializedName('dataLimitInBytes')]
    public ?float $dataLimitInBytes;

    /**
     * Min number of days for the package
     */
    #[SerializedName('minDays')]
    public ?float $minDays;

    /**
     * Max number of days for the package
     */
    #[SerializedName('maxDays')]
    public ?float $maxDays;

    /**
     * Price of the package in cents
     */
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
