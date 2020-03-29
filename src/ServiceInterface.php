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