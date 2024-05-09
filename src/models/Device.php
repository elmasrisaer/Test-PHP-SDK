<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Device
{
    #[SerializedName('oem')]
    public ?string $oem;

    #[SerializedName('hardwareName')]
    public ?string $hardwareName;

    #[SerializedName('hardwareModel')]
    public ?string $hardwareModel;

    #[SerializedName('eid')]
    public ?string $eid;

    public function __construct(
        ?string $oem = null,
        ?string $hardwareName = null,
        ?string $hardwareModel = null,
        ?string $eid = null
    ) {
        $this->oem = $oem;
        $this->hardwareName = $hardwareName;
        $this->hardwareModel = $hardwareModel;
        $this->eid = $eid;
    }
}
