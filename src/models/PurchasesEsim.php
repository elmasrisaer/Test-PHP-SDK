<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PurchasesEsim
{
    #[SerializedName('iccid')]
    public ?string $iccid;

    public function __construct(?string $iccid = null)
    {
        $this->iccid = $iccid;
    }
}
