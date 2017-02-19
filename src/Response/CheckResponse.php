<?php

namespace Keesschepers\Billink\Response;

use SimpleXMLElement;

class CheckResponse
{
    private $description;
    private $code;
    private $errorCode;
    private $errorDescription;

    public function __construct($xml)
    {
        $response = new SimpleXMLElement($xml);

        $this->code = (string)$response->MSG->CODE;
        $this->description = (string)$response->MSG->DESCRIPTION;

        if ($response->ERROR) {
            $this->errorCode = (string)$response->ERROR->CODE;
            $this->errorDescription = (string)$response->ERROR->DESCRIPTION;
        }
    }

    public function isError()
    {
        return (null !== $this->errorCode);
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    public function isCreditWorthy()
    {
        return ($this->code == 500);
    }
}
