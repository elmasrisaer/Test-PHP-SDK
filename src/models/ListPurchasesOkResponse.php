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

    /**
     * The cursor value representing the end of the current page of results. Use this cursor value as the "afterCursor" parameter in your next request to retrieve the subsequent page of results. It ensures that you continue fetching data from where you left off, facilitating smooth pagination.
     */
    #[SerializedName('afterCursor')]
    public ?string $afterCursor;

    public function __construct(?array $purchases = [], ?string $afterCursor = null)
    {
        $this->purchases = $purchases;
        $this->afterCursor = $afterCursor;
    }
}
