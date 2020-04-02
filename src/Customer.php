<?php

namespace Sepalevy\ServicePaymentsApi;

class Customer implements CustomerInterface
{

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function getCustomerId(): string
    {
        return $this->attributes['customer_id'];
    }

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

}