<?php

namespace Keesschepers\Billink\Request;

use DateTime;
use SimpleXMLElement;

class CheckRequest
{
    private $username;
    private $token;
    private $type;
    private $companyName;
    private $chamberOfCommerce;
    private $workflowNumber;
    private $firstName;
    private $lastName;
    private $initials;
    private $houseNumber;
    private $houseNumberExtension;
    private $postalCode;
    private $phoneNumber;
    private $ip;

    /**
     * @var DateTime
     */
    private $birthDate;
    private $email;
    private $orderAmount;

    /**
     * @param string $username
     * @return CheckRequest
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string $token
     * @return CheckRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param string $type
     * @return CheckRequest
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $companyName
     * @return CheckRequest
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param string $chamberOfCommerce
     * @return CheckRequest
     */
    public function setChamberOfCommerce($chamberOfCommerce)
    {
        $this->chamberOfCommerce = $chamberOfCommerce;

        return $this;
    }

    /**
     * @param integer $workflowNumber
     * @return CheckRequest
     */
    public function setWorkflowNumber($workflowNumber)
    {
        $this->workflowNumber = $workflowNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getWorkflowNumber()
    {
        return $this->workflowNumber;
    }

    /**
     * @param string $firstName
     * @return CheckRequest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     * @return CheckRequest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $initials
     * @return CheckRequest
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * @param string $houseNumber
     * @return CheckRequest
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @param string $houseNumberExtension
     * @return CheckRequest
     */
    public function setHouseNumberExtension($houseNumberExtension)
    {
        $this->houseNumberExtension = $houseNumberExtension;

        return $this;
    }

    /**
     * @param string $postalCode
     * @return CheckRequest
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @param string $phoneNumber
     * @return CheckRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @param DateTime $birthDate
     * @return CheckRequest
     */
    public function setBirthDate(DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @param string $email
     * @return CheckRequest
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param float $orderAmount
     * @return CheckRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    public function setIp($ipAddress)
    {
        $this->ip = $ipAddress;

        return $this;
    }

    public function asXml()
    {
        $document = new SimpleXMLElement('<API></API>');
        $document->addChild('VERSION', 'BILLINK2.0');
        $document->addChild('CLIENTUSERNAME', $this->username);
        $document->addChild('CLIENTID', $this->token);
        $document->addChild('TYPE', $this->type);
        $document->addChild('COMPANYNAME', htmlspecialchars($this->companyName));
        $document->addChild('CHAMBEROFCOMMERCE', $this->chamberOfCommerce);
        $document->addChild('WORKFLOWNUMBER', $this->workflowNumber);
        $document->addChild('ACTION', 'CHECK');
        $document->addChild('FIRSTNAME', $this->firstName);
        $document->addChild('LASTNAME', $this->lastName);
        $document->addChild('INITIALS', $this->initials);
        $document->addChild('HOUSENUMBER', $this->houseNumber);
        $document->addChild('HOUSEEXTENSION', $this->houseNumberExtension);
        $document->addChild('POSTALCODE', $this->postalCode);
        $document->addChild('PHONENUMBER', $this->phoneNumber);
        $document->addChild('BIRTHDATE', $this->birthDate->format('d-m-Y'));
        $document->addChild('EMAIL', $this->email);
        $document->addChild('ORDERAMOUNT', number_format($this->orderAmount, 2, '.', ','));
        $document->addChild('IP', $this->ip);

        return $document->asXml();
    }
}
