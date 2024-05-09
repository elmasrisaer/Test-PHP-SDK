<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class GetEsimOkResponseEsim
{
    #[SerializedName('iccid')]
    public ?string $iccid;

    #[SerializedName('smdpAddress')]
    public ?string $smdpAddress;

    #[SerializedName('manualActivationCode')]
    public ?string $manualActivationCode;

    #[SerializedName('status')]
    public ?string $status;

    public function __construct(
        ?string $iccid = null,
        ?string $smdpAddress = null,
        ?string $manualActivationCode = null,
        ?string $status = null
    ) {
        $this->iccid = $iccid;
        $this->smdpAddress = $smdpAddress;
        $this->manualActivationCode = $manualActivationCode;
        $this->status = $status;
    }
}
