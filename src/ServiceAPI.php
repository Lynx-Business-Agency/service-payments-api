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

    public function updateCustomer(string $customerId, array $attributes)
    {
        return $this->service->updateCustomer($customerId, $attributes);
    }

    public function deleteCustomer(string $customerId)
    {
        return $this->service->deleteCustomer($customerId);
    }

    public function retrieveCustomer(string $customerId)
    {
        return $this->service->retrieveCustomer($customerId);
    }

    public function createCustomer(array $attributes)
    {
        return $this->service->createCustomer($attributes);
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
        return $this->service->getKeys()[$key] ?? $default;
    }

    public function hasKey($key)
    {
        return !is_null($this->getKey($key));
    }

}