<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class EditPurchaseOkResponse
{
    #[SerializedName('purchaseId')]
    public ?string $purchaseId;

    #[SerializedName('newStartDate')]
    public ?string $newStartDate;

    #[SerializedName('newEndDate')]
    public ?string $newEndDate;

    #[SerializedName('newStartTime')]
    public ?float $newStartTime;

    #[SerializedName('newEndTime')]
    public ?float $newEndTime;

    public function __construct(
        ?string $purchaseId = null,
        ?string $newStartDate = null,
        ?string $newEndDate = null,
        ?float $newStartTime = null,
        ?float $newEndTime = null
    ) {
        $this->purchaseId = $purchaseId;
        $this->newStartDate = $newStartDate;
        $this->newEndDate = $newEndDate;
        $this->newStartTime = $newStartTime;
        $this->newEndTime = $newEndTime;
    }
}
