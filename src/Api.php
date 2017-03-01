<?php

namespace Keesschepers\Billink;

use GuzzleHttp;
use Keesschepers\Billink\Request\OrderRequest;
use Keesschepers\Billink\Response\CheckResponse;
use Keesschepers\Billink\Response\OrderResponse;
use Keesschepers\Billink\Request\CheckRequest;
use Keesschepers\Billink\Request\WorkflowRequest;
use Keesschepers\Billink\Response\WorkflowResponse;
use GuzzleHttp\Exception\RequestException;
use RuntimeException;

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

    /**
     * Does a check call to the Billink API to see if the customer is credit worthy.
     *
     * @param \Keesschepers\Billink\Request\CheckRequest $request
     * @param integer                                    $timeout The amount of milliseconds the API call may take before RuntimeException is thrown.
     *
     * @return \Keesschepers\Billink\Response\CheckResponse
     */
    public function check(CheckRequest $request, $timeout = 2000)
    {
        $request->setUsername($this->username);
        $request->setToken($this->token);

        $client = new GuzzleHttp\Client(['base_uri' => $this->endpoint]);
        try {
            $response = $client->post(
                '/api/check',
                [
                    'body' => $request->asXml(),
                    'timeout' => ($timeout / 1000),
                    'header' => [
                        'content-type' => 'text/xml',
                    ]
                ]
            );
        } catch (RequestException $e) {
            throw new RuntimeException('Billink check request failed.', 0, $e);
        }

        $response = new CheckResponse($response->getBody()->getContents());

        if ($response->isError() && in_array($response->getErrorCode(), ['001', '101', '102', '103', '601'])) {
            throw new RuntimeException($response->getErrorDescription(), $response->getErrorCode());
        }

        return $response;
    }

    /**
     * Add a claim to Billink.
     *
     * @param \Keesschepers\Billink\Request\OrderRequest $request
     *
     * @return \Keesschepers\Billink\Response\OrderResponse
     */
    public function order(OrderRequest $request)
    {
        $request->setUsername($this->username);
        $request->setToken($this->token);

        $client = new GuzzleHttp\Client(['base_uri' => $this->endpoint]);
        $response = $client->post(
            '/api/order',
            [
                'body' => $request->asXml(),
                'header' => [
                    'content-type' => 'text/xml',
                ]
            ]
        );

        return new OrderResponse($response->getBody()->getContents());
    }

    public function startWorkFlow(WorkflowRequest $request)
    {
        $request->setUsername($this->username);
        $request->setToken($this->token);

        $client = new GuzzleHttp\Client(['base_uri' => $this->endpoint]);
        $response = $client->post(
            '/api/start-workflow',
            [
                'body' => $request->asXml(),
                'header' => [
                    'content-type' => 'text/xml',
                ]
            ]
        );

        return new WorkflowResponse($response->getBody()->getContents());
    }
}
