<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Purchases
{
    #[SerializedName('id')]
    public ?string $id;

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

    #[SerializedName('createdAt')]
    public ?float $createdAt;

    #[SerializedName('package')]
    public ?Package $package;

    #[SerializedName('esim')]
    public ?PurchasesEsim $esim;

    #[SerializedName('source')]
    public ?string $source;

    public function __construct(
        ?string $id = null,
        ?string $startDate = null,
        ?string $endDate = null,
        ?string $createdDate = null,
        ?float $startTime = null,
        ?float $endTime = null,
        ?float $createdAt = null,
        ?Package $package = null,
        ?PurchasesEsim $esim = null,
        ?string $source = null
    ) {
        $this->id = $id;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->createdDate = $createdDate;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->createdAt = $createdAt;
        $this->package = $package;
        $this->esim = $esim;
        $this->source = $source;
    }
}
