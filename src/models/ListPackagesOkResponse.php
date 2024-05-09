<?php

namespace Celitech\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ListPackagesOkResponse
{
    /**
     * @var Packages[]|null
     */
    #[SerializedName('packages')]
    public ?array $packages;

    #[SerializedName('afterCursor')]
    public ?string $afterCursor;

    public function __construct(?array $packages = [], ?string $afterCursor = null)
    {
        $this->packages = $packages;
        $this->afterCursor = $afterCursor;
    }
}
