<?php

namespace Celitech\Hooks;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;
use Exception;

class CustomHook implements HookInterface
{
    private $tokenUrl;
    private $clientId;
    private $clientSecret;
    private $token;
    private $tokenExpiration;

    /**
     * @param array{
     *   client_id: string,
     *   client_secret: string
     * } $params
     */

    public function __construct(array $params)
    {
        $this->clientId = $params['clientId'];
        $this->clientSecret = $params['client_secret'];
        $this->token = null;
        $this->tokenExpiration = null;
    }

    private function setTokenUrl(RequestInterface $request)
    {
        $host = $request->getUri()->getHost();
        $newTokenUrl = null;
        if (strpos($host, 'celitech.net') !== false) {
            $newTokenUrl = 'https://auth.celitech.net/oauth2/token';
        } else {
            $newTokenUrl = 'https://qa-core-partners.auth.us-east-1.amazoncognito.com/oauth2/token';
        }

        // Check if the token URL has changed
        if ($newTokenUrl !== $this->tokenUrl) {
            $this->tokenUrl = $newTokenUrl;
            // Invalidate current token
            $this->token = null;
            $this->tokenExpiration = null;
        }
    }

    private function refreshToken()
    {
        $client = new Client();
        $response = $client->post($this->tokenUrl, [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'grant_type' => 'client_credentials',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $this->token = $data['access_token'];
        $this->tokenExpiration = time() + $data['expires_in'];
    }

    public function beforeRequest(RequestInterface &$request): void
    {
        $this->setTokenUrl($request);

        if ($this->token === null || time() >= $this->tokenExpiration) {
            $this->refreshToken();
        }

        $request = $request->withHeader('Authorization', 'Bearer ' . $this->token);
    }

    public function afterResponse(RequestInterface $request, ResponseInterface &$response): void
    {
    }

    public function onError(RequestInterface $request, Exception $exception): void
    {
        echo 'Error during request: ' . $exception->getMessage();
    }
}
