<?php

namespace gjsbrt\NetBox\Api;

use gjsbrt\NetBox\Client;

abstract class AbstractApi implements ApiInterface
{
    /** @var \gjsbrt\NetBox\Client */
    public $client;

    /**
     * AbstractApi constructor.
     * @param \gjsbrt\NetBox\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($path, $parameters)
    {
        return $this->client->getHttpClient()->get($path, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function post($path, $parameters)
    {
        return $this->client->getHttpClient()->post($path, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function put($path, $parameters)
    {
        return $this->client->getHttpClient()->put($path, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function delete($path, $parameters)
    {
        return $this->client->getHttpClient()->delete($path, $parameters);
    }
}
