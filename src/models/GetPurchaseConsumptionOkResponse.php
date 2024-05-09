<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class GetPurchaseConsumptionOkResponse
{
    #[SerializedName('dataUsageRemainingInBytes')]
    public ?float $dataUsageRemainingInBytes;

    #[SerializedName('status')]
    public ?string $status;

    public function __construct(?float $dataUsageRemainingInBytes = null, ?string $status = null)
    {
        $this->dataUsageRemainingInBytes = $dataUsageRemainingInBytes;
        $this->status = $status;
    }
}
