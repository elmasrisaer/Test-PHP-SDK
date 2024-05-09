<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class CreatePurchaseRequest
{
    #[SerializedName('destination')]
    public string $destination;

    #[SerializedName('dataLimitInGB')]
    public float $dataLimitInGb;

    #[SerializedName('startDate')]
    public string $startDate;

    #[SerializedName('endDate')]
    public string $endDate;

    #[SerializedName('email')]
    public ?string $email;

    #[SerializedName('networkBrand')]
    public ?string $networkBrand;

    #[SerializedName('startTime')]
    public ?float $startTime;

    #[SerializedName('endTime')]
    public ?float $endTime;

    public function __construct(
        string $destination,
        float $dataLimitInGb,
        string $startDate,
        string $endDate,
        ?string $email = null,
        ?string $networkBrand = null,
        ?float $startTime = null,
        ?float $endTime = null
    ) {
        $this->destination = $destination;
        $this->dataLimitInGb = $dataLimitInGb;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->email = $email;
        $this->networkBrand = $networkBrand;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}
