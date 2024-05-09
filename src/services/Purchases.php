<?php

namespace Celitech\Services;

use Celitech\Utils\Serializer;
use Celitech\Models\CreatePurchaseOkResponse;
use Celitech\Models\CreatePurchaseRequest;
use Celitech\Models\EditPurchaseOkResponse;
use Celitech\Models\EditPurchaseRequest;
use Celitech\Models\GetPurchaseConsumptionOkResponse;
use Celitech\Models\ListDestinationsOkResponse;
use Celitech\Models\ListPackagesOkResponse;
use Celitech\Models\ListPurchasesOkResponse;
use Celitech\Models\TopUpEsimOkResponse;
use Celitech\Models\TopUpEsimRequest;

class Purchases extends BaseService
{
    public function listPurchases(
        string $iccid = null,
        string $afterDate = null,
        string $beforeDate = null,
        string $afterCursor = null,
        float $limit = null,
        float $after = null,
        float $before = null
    ): ListPurchasesOkResponse {
        $data = $this->sendRequest('get', '/purchases', [
            'query' => [
                'iccid' => $iccid,
                'afterDate' => $afterDate,
                'beforeDate' => $beforeDate,
                'afterCursor' => $afterCursor,
                'limit' => $limit,
                'after' => $after,
                'before' => $before,
            ],
        ]);

        return Serializer::deserialize($data, ListPurchasesOkResponse::class);
    }

    public function createPurchase(?CreatePurchaseRequest $input = null): CreatePurchaseOkResponse
    {
        $data = $this->sendRequest('post', '/purchases', ['json' => Serializer::serialize($input)]);

        return Serializer::deserialize($data, CreatePurchaseOkResponse::class);
    }

    public function topUpESIM(?TopUpEsimRequest $input = null): TopUpEsimOkResponse
    {
        $data = $this->sendRequest('post', '/purchases/topup', ['json' => Serializer::serialize($input)]);

        return Serializer::deserialize($data, TopUpEsimOkResponse::class);
    }

    public function editPurchase(?EditPurchaseRequest $input = null): EditPurchaseOkResponse
    {
        $data = $this->sendRequest('post', '/purchases/edit', ['json' => Serializer::serialize($input)]);

        return Serializer::deserialize($data, EditPurchaseOkResponse::class);
    }

    public function getPurchaseConsumption(string $purchaseId): GetPurchaseConsumptionOkResponse
    {
        $data = $this->sendRequest('get', "/purchases/{$purchaseId}/consumption", []);

        return Serializer::deserialize($data, GetPurchaseConsumptionOkResponse::class);
    }
}
