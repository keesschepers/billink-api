<?php

namespace Keesschepers\Billink\Request;

use DateTime;
use SimpleXMLElement;

class OrderRequest
{
    private $username;
    private $token;
    private $type;
    private $companyName;
    private $chamberOfCommerce;
    private $workflowNumber;
    private $orderNumber;
    private $date;
    private $firstName;
    private $initials;
    private $lastName;
    private $street;
    private $houseNumber;
    private $houseNumberExtension;
    private $postalCode;
    private $countryCode;
    private $city;
    private $deliveryStreet;
    private $deliveryHouseNumber;
    private $deliveryHouseNumberExtension;
    private $deliveryPostalCode;
    private $deliveryCountryCode;
    private $deliveryCity;
    private $deliveryAddressCompanyName;
    private $deliveryAddressFirstName;
    private $deliveryAddressLastName;
    private $ip;
    private $phoneNumber;
    private $email;
    private $checkuuid;
    private $items;

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @param mixed $deliveryStreet
     * @return OrderRequest
     */
    public function setDeliveryStreet($deliveryStreet)
    {
        $this->deliveryStreet = $deliveryStreet;

        return $this;
    }

    /**
     * @param mixed $deliveryHouseNumber
     * @return OrderRequest
     */
    public function setDeliveryHouseNumber($deliveryHouseNumber)
    {
        $this->deliveryHouseNumber = $deliveryHouseNumber;

        return $this;
    }

    /**
     * @param mixed $deliveryHouseNumberExtension
     * @return OrderRequest
     */
    public function setDeliveryHouseNumberExtension($deliveryHouseNumberExtension)
    {
        $this->deliveryHouseNumberExtension = $deliveryHouseNumberExtension;

        return $this;
    }

    /**
     * @param mixed $deliveryPostalCode
     * @return OrderRequest
     */
    public function setDeliveryPostalCode($deliveryPostalCode)
    {
        $this->deliveryPostalCode = $deliveryPostalCode;

        return $this;
    }

    /**
     * @param mixed $deliveryCountryCode
     * @return OrderRequest
     */
    public function setDeliveryCountryCode($deliveryCountryCode)
    {
        $this->deliveryCountryCode = $deliveryCountryCode;

        return $this;
    }

    /**
     * @param mixed $deliveryCity
     * @return OrderRequest
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;

        return $this;
    }

    /**
     * @param mixed $deliveryAddressCompanyName
     * @return OrderRequest
     */
    public function setDeliveryAddressCompanyName($deliveryAddressCompanyName)
    {
        $this->deliveryAddressCompanyName = $deliveryAddressCompanyName;

        return $this;
    }

    /**
     * @param mixed $deliveryAddressFirstName
     * @return OrderRequest
     */
    public function setDeliveryAddressFirstName($deliveryAddressFirstName)
    {
        $this->deliveryAddressFirstName = $deliveryAddressFirstName;

        return $this;
    }

    /**
     * @param mixed $deliveryAddressLastName
     * @return OrderRequest
     */
    public function setDeliveryAddressLastName($deliveryAddressLastName)
    {
        $this->deliveryAddressLastName = $deliveryAddressLastName;

        return $this;
    }

    /**
     * @param mixed $ip
     * @return OrderRequest
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @param mixed $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param mixed $checkuuid
     * @return OrderRequest
     */
    public function setCheckuuid($checkuuid)
    {
        $this->checkuuid = $checkuuid;

        return $this;
    }

    /**
     * @param \Keesschepers\Billink\Request\OrderRequestItem $item
     *
     * @return $this
     */
    public function addItem(OrderRequestItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

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

    /**
     * @param string $type
     *
     * @return CheckRequest
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return CheckRequest
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param string $chamberOfCommerce
     *
     * @return CheckRequest
     */
    public function setChamberOfCommerce($chamberOfCommerce)
    {
        $this->chamberOfCommerce = $chamberOfCommerce;

        return $this;
    }

    /**
     * @param integer $workflowNumber
     *
     * @return CheckRequest
     */
    public function setWorkflowNumber($workflowNumber)
    {
        $this->workflowNumber = $workflowNumber;

        return $this;
    }

    /**
     * @param string $firstName
     *
     * @return CheckRequest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     *
     * @return CheckRequest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $initials
     *
     * @return CheckRequest
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * @param string $houseNumber
     *
     * @return CheckRequest
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @param string $houseNumberExtension
     *
     * @return CheckRequest
     */
    public function setHouseNumberExtension($houseNumberExtension)
    {
        $this->houseNumberExtension = $houseNumberExtension;

        return $this;
    }

    /**
     * @param string $postalCode
     *
     * @return CheckRequest
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return CheckRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return CheckRequest
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
        $document->addChild('ACTION', 'ORDER');
        $document->addChild('ORDERNUMBER', $this->orderNumber);
        $document->addChild('DATE', $this->date->format('d-m-Y'));
        $document->addChild('FIRSTNAME', $this->firstName);
        $document->addChild('INITIALS', $this->initials);
        $document->addChild('LASTNAME', $this->lastName);
        $document->addChild('STREET', $this->street);
        $document->addChild('HOUSENUMBER', $this->houseNumber);
        $document->addChild('HOUSEEXTENSION', $this->houseNumberExtension);
        $document->addChild('POSTALCODE', $this->postalCode);
        $document->addChild('COUNTRYCODE', $this->countryCode);
        $document->addChild('CITY', $this->city);
        $document->addChild('DELIVERYSTREET', $this->deliveryStreet);
        $document->addChild('DELIVERYHOUSENUMBER', $this->deliveryHouseNumber);
        $document->addChild('DELIVERYHOUSEEXTENSION', $this->deliveryHouseNumberExtension);
        $document->addChild('DELIVERYPOSTALCODE', $this->deliveryPostalCode);
        $document->addChild('DELIVERYCOUNTRYCODE', $this->deliveryCountryCode);
        $document->addChild('DELIVERYCITY', $this->deliveryCity);
        $document->addChild('DELIVERYADDRESSCOMPANYNAME', $this->deliveryAddressCompanyName);
        $document->addChild('DELIVERYADDRESSFIRSTNAME', $this->deliveryAddressFirstName);
        $document->addChild('DELIVERYADDRESSLASTNAME', $this->deliveryAddressLastName);
        $document->addChild('PHONENUMBER', $this->phoneNumber);
        $document->addChild('EMAIL', $this->email);
        $document->addChild('IP', $this->ip);
        $document->addChild('CHECKUUID', $this->checkuuid);

        $items = $document->addChild('ORDERITEMS');

        foreach ($this->items as $item) {
            $newItem = $items->addChild('ITEM');

            $newItem->addChild('DESCRIPTION', $item->getDescription());
            $newItem->addChild('ORDERQUANTITY', $item->getOrderQuantity());

            if ($this->type == 'B') {
                $newItem->addChild('PRICEEXCL', $item->getPriceExcl());
            }

            $newItem->addChild('BTW', $item->getVatPercentage());
        }

        return $document->asXml();
    }
}
