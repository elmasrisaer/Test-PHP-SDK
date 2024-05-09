<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ListPurchasesOkResponse
{
    /**
     * @var Purchases[]|null
     */
    #[SerializedName('purchases')]
    public ?array $purchases;

    #[SerializedName('afterCursor')]
    public ?string $afterCursor;

    public function __construct(?array $purchases = [], ?string $afterCursor = null)
    {
        $this->purchases = $purchases;
        $this->afterCursor = $afterCursor;
    }
}
