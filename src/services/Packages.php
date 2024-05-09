<?php

namespace Celitech\Services;

use Celitech\Utils\Serializer;
use Celitech\Models\ListDestinationsOkResponse;
use Celitech\Models\ListPackagesOkResponse;

class Packages extends BaseService
{
    public function listPackages(
        string $destination = null,
        string $startDate = null,
        string $endDate = null,
        string $afterCursor = null,
        float $limit = null,
        int $startTime = null,
        int $endTime = null,
        float $duration = null
    ): ListPackagesOkResponse {
        $data = $this->sendRequest('get', '/packages', [
            'query' => [
                'destination' => $destination,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'afterCursor' => $afterCursor,
                'limit' => $limit,
                'startTime' => $startTime,
                'endTime' => $endTime,
                'duration' => $duration,
            ],
        ]);

        return Serializer::deserialize($data, ListPackagesOkResponse::class);
    }
}
