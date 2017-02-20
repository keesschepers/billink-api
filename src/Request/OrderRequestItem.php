<?php

namespace Keesschepers\Billink\Request;

class OrderRequestItem
{
    private $code;
    private $description;
    private $orderQuantity;
    private $priceExcl;
    private $priceIncl;
    private $vatPercentage;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return OrderRequestItem
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return OrderRequestItem
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * @param mixed $orderQuantity
     * @return OrderRequestItem
     */
    public function setOrderQuantity($orderQuantity)
    {
        $this->orderQuantity = $orderQuantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceExcl()
    {
        return $this->priceExcl;
    }

    /**
     * @param mixed $priceExcl
     * @return OrderRequestItem
     */
    public function setPriceExcl($priceExcl)
    {
        $this->priceExcl = $priceExcl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceIncl()
    {
        return $this->priceIncl;
    }

    /**
     * @param mixed $priceIncl
     * @return OrderRequestItem
     */
    public function setPriceIncl($priceIncl)
    {
        $this->priceIncl = $priceIncl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    /**
     * @param mixed $vatPercentage
     * @return OrderRequestItem
     */
    public function setVatPercentage($vatPercentage)
    {
        $this->vatPercentage = $vatPercentage;
        return $this;
    }
}
