<?php

namespace Sepalevy\ServicePaymentsApi;

class ServiceAPI
{

    /** @var ServiceInterface $service */
    private $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function check()
    {
        return $this->checkAuthentification();
    }

    public function checkAuthentification()
    {
        return $this->service->checkAuthentification();
    }

    public function getKeys()
    {
        return $this->service->getKeys();
    }

    public function getKey($key, $default = null)
    {
        return $this->service->getKey($key) ?? $default;
    }

    public function hasKey($key)
    {
        return !is_null($this->getKey($key));
    }

}