<?php

namespace Keesschepers\Billink;

use GuzzleHttp;
use Keesschepers\Billink\Response\CheckResponse;
use Keesschepers\Billink\Request\CheckRequest;
use SimpleXMLElement;

class Api
{
    private $username;
    private $token;
    private $endpoint;

    public function __construct($username, $token, $endpoint)
    {
        $this->username = $username;
        $this->token = $token;
        $this->endpoint = $endpoint;
    }

    public function check(CheckRequest $request)
    {
        $request->setUsername($this->username);
        $request->setToken($this->token);

        $client = new GuzzleHttp\Client(['base_uri' => $this->endpoint]);
        $response = $client->post(
            '/api/check',
            [
                'body' => $request->asXml(),
                'header' => [
                    'content-type' => 'text/xml',
                ]
            ]
        );

        return new CheckResponse($response->getBody()->getContents());
    }
}
