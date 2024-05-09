<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class EditPurchaseRequest
{
    #[SerializedName('purchaseId')]
    public string $purchaseId;

    #[SerializedName('startDate')]
    public string $startDate;

    #[SerializedName('endDate')]
    public string $endDate;

    #[SerializedName('startTime')]
    public ?float $startTime;

    #[SerializedName('endTime')]
    public ?float $endTime;

    public function __construct(
        string $purchaseId,
        string $startDate,
        string $endDate,
        ?float $startTime = null,
        ?float $endTime = null
    ) {
        $this->purchaseId = $purchaseId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}
