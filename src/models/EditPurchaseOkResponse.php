<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class EditPurchaseOkResponse
{
    /**
     * ID of the purchase
     */
    #[SerializedName('purchaseId')]
    public ?string $purchaseId;

    /**
     * Start date of the package's validity in the format 'yyyy-MM-ddThh:mm:ssZZ'
     */
    #[SerializedName('newStartDate')]
    public ?string $newStartDate;

    /**
     * End date of the package's validity in the format 'yyyy-MM-ddThh:mm:ssZZ'
     */
    #[SerializedName('newEndDate')]
    public ?string $newEndDate;

    /**
     * Epoch value representing the new start time of the package's validity
     */
    #[SerializedName('newStartTime')]
    public ?float $newStartTime;

    /**
     * Epoch value representing the new end time of the package's validity
     */
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
