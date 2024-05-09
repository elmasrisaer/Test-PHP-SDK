<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class TopUpEsimRequest
{
    #[SerializedName('iccid')]
    public string $iccid;

    #[SerializedName('dataLimitInGB')]
    public float $dataLimitInGb;

    #[SerializedName('startDate')]
    public string $startDate;

    #[SerializedName('endDate')]
    public string $endDate;

    #[SerializedName('email')]
    public ?string $email;

    #[SerializedName('startTime')]
    public ?float $startTime;

    #[SerializedName('endTime')]
    public ?float $endTime;

    public function __construct(
        string $iccid,
        float $dataLimitInGb,
        string $startDate,
        string $endDate,
        ?string $email = null,
        ?float $startTime = null,
        ?float $endTime = null
    ) {
        $this->iccid = $iccid;
        $this->dataLimitInGb = $dataLimitInGb;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->email = $email;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}
