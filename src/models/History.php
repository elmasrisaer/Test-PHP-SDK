<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class History
{
    #[SerializedName('status')]
    public ?string $status;

    #[SerializedName('statusDate')]
    public ?string $statusDate;

    #[SerializedName('date')]
    public ?float $date;

    public function __construct(?string $status = null, ?string $statusDate = null, ?float $date = null)
    {
        $this->status = $status;
        $this->statusDate = $statusDate;
        $this->date = $date;
    }
}
