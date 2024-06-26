<?php

namespace gjsbrt\NetBox\Api\DCMI;

use gjsbrt\NetBox\Api\AbstractApi;

class ConnectedDevices extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params=[])
    {
        return $this->get("/dcim/connected-device/", $params);
    }
}
