<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class CreatePurchaseOkResponsePurchase
{
    #[SerializedName('id')]
    public ?string $id;

    #[SerializedName('packageId')]
    public ?string $packageId;

    #[SerializedName('startDate')]
    public ?string $startDate;

    #[SerializedName('endDate')]
    public ?string $endDate;

    #[SerializedName('createdDate')]
    public ?string $createdDate;

    #[SerializedName('startTime')]
    public ?float $startTime;

    #[SerializedName('endTime')]
    public ?float $endTime;

    public function __construct(
        ?string $id = null,
        ?string $packageId = null,
        ?string $startDate = null,
        ?string $endDate = null,
        ?string $createdDate = null,
        ?float $startTime = null,
        ?float $endTime = null
    ) {
        $this->id = $id;
        $this->packageId = $packageId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->createdDate = $createdDate;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}
