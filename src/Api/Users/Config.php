<?php

namespace gjsbrt\NetBox\Api\Users;

use gjsbrt\NetBox\Api\AbstractApi;

class Config extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/users/users/", $params);
    }
}
