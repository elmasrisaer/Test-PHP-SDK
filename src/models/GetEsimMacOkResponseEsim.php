<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class GetEsimMacOkResponseEsim
{
    #[SerializedName('iccid')]
    public ?string $iccid;

    #[SerializedName('smdpAddress')]
    public ?string $smdpAddress;

    #[SerializedName('manualActivationCode')]
    public ?string $manualActivationCode;

    public function __construct(
        ?string $iccid = null,
        ?string $smdpAddress = null,
        ?string $manualActivationCode = null
    ) {
        $this->iccid = $iccid;
        $this->smdpAddress = $smdpAddress;
        $this->manualActivationCode = $manualActivationCode;
    }
}
