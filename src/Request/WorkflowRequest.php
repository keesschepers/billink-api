<?php

namespace Keesschepers\Billink\Request;

use SimpleXMLElement;

class WorkflowRequest
{
    private $username;
    private $token;
    private $invoices;

    /**
     * @param string $username
     *
     * @return CheckRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return CheckRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    public function addInvoice($workflowNumber, $invoiceNumber)
    {
        $this->invoices[] = ['workflow' => $workflowNumber, 'invoice' => $invoiceNumber];

        return $this;
    }

    public function asXml()
    {
        $document = new SimpleXMLElement('<API></API>');
        $document->addChild('VERSION', 'BILLINK2.0');
        $document->addChild('CLIENTUSERNAME', $this->username);
        $document->addChild('CLIENTID', $this->token);
        $document->addChild('ACTION', 'activate order');

        $items = $document->addChild('INVOICES');

        foreach ($this->invoices as $invoice) {
            $newItem = $items->addChild('ITEM');

            $newItem->addChild('INVOICENUMBER', $invoice['invoice']);
            $newItem->addChild('WORKFLOWNUMBER', $invoice['workflow']);
        }

        return $document->asXml();
    }
}
