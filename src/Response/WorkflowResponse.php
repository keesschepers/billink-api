<?php

namespace Keesschepers\Billink\Response;

use SimpleXMLElement;

class WorkflowResponse
{
    private $code;

    public function __construct($xml)
    {
        $response = new SimpleXMLElement($xml);
        $this->code = (string)$response->MSG->CODE;
    }

    public function isError()
    {
        return ($this->code !== '500');
    }
}
