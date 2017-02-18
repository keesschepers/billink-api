<?php

namespace Keesschepers\Billink\Response;

use SimpleXMLElement;

class CheckResponse
{
    private $description;
    private $code;

    public function __construct($xml)
    {
        $response = new SimpleXMLElement($xml);

        $this->code = (string)$response->MSG->CODE;
        $this->description = (string)$response->MSG->DESCRIPTION;
    }

    public function isCreditWorthy()
    {
        return ($this->code === 501);
    }
}
