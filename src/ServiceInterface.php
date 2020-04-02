<?php

namespace Sepalevy\ServicePaymentsApi;

interface ServiceInterface
{

    /**
     * @param array $keys
     */
    public function __construct(array $keys = []);

    /**
     * Check api keys authentification work
     *
     * @return boolean
     */
    public function checkAuthentification();

    /**
     * Create new customer on plateform
     *
     * @param array $attributes
     * @return CustomerInterface
     */
    public function createCustomer(array $attributes = []);

    /**
     * Retrieve on plateform
     *
     * @param string $customerId
     * @return CustomerInterface
     */
    public function retrieveCustomer(string $customerId);

    /**
     * Delete customer on plateform
     *
     * @param string $customerId
     * @return bool
     */
    public function deleteCustomer(string $customerId);

    /**
     * Get keys passed in constructor
     *
     * @return array|null
     */
    public function getKeys();

    /**
     * Get key passed in constructor
     *
     * @param string $key
     * @return null|string|array
     */
    public function getKey(string $key);

}