<?php

namespace Celitech\Services;

use Celitech\Utils\Serializer;
use Celitech\Models\CreatePurchaseOkResponse;
use Celitech\Models\CreatePurchaseRequest;
use Celitech\Models\EditPurchaseOkResponse;
use Celitech\Models\EditPurchaseRequest;
use Celitech\Models\GetEsimDeviceOkResponse;
use Celitech\Models\GetEsimHistoryOkResponse;
use Celitech\Models\GetEsimMacOkResponse;
use Celitech\Models\GetEsimOkResponse;
use Celitech\Models\GetPurchaseConsumptionOkResponse;
use Celitech\Models\ListDestinationsOkResponse;
use Celitech\Models\ListPackagesOkResponse;
use Celitech\Models\ListPurchasesOkResponse;
use Celitech\Models\TopUpEsimOkResponse;
use Celitech\Models\TopUpEsimRequest;

class ESim extends BaseService
{
    public function getESIM(string $iccid): GetEsimOkResponse
    {
        $data = $this->sendRequest('get', '/esim', [
            'query' => [
                'iccid' => $iccid,
            ],
        ]);

        return Serializer::deserialize($data, GetEsimOkResponse::class);
    }

    public function getESIMDevice(string $iccid): GetEsimDeviceOkResponse
    {
        $data = $this->sendRequest('get', "/esim/{$iccid}/device", []);

        return Serializer::deserialize($data, GetEsimDeviceOkResponse::class);
    }

    public function getESIMHistory(string $iccid): GetEsimHistoryOkResponse
    {
        $data = $this->sendRequest('get', "/esim/{$iccid}/history", []);

        return Serializer::deserialize($data, GetEsimHistoryOkResponse::class);
    }

    public function getESIMMac(string $iccid): GetEsimMacOkResponse
    {
        $data = $this->sendRequest('get', "/esim/{$iccid}/mac", []);

        return Serializer::deserialize($data, GetEsimMacOkResponse::class);
    }
}
