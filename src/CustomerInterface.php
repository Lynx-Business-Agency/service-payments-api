<?php

namespace Sepalevy\ServicePaymentsApi;

interface CustomerInterface 
{

    /**
     * Initialize customer with attributes
     *
     * @param array $attributes
     */
    public function __construct(array $attributes);

    /**
     * Get customer ID from provider
     *
     * @return string
     */
    public function getCustomerId(): string;

    /**
     * Get customer email
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Get customer name
     *
     * @return string
     */
    public function getName(): string;

}
