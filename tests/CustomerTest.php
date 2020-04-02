<?php

use PHPUnit\Framework\TestCase;
use Sepalevy\ServicePaymentsApi\Customer;
use Sepalevy\ServicePaymentsApi\ServiceAPI;
use Sepalevy\ServicePaymentsApi\ServiceInterface;

class CustomerTest extends TestCase
{

    /** @test */
    public function check_it_work_create_customer()
    {
        $service = new ServiceAPI(new TestServiceWithCustomer);

        $customer = $service->createCustomer([
            'name' => 'Hicham',
            'email' => 'hicham.slimani.fr@gmail.com',
            'customer_id' => 'cus_xxxx',
        ]);

        $this->assertSame('Hicham', $customer->getName());
        $this->assertSame('hicham.slimani.fr@gmail.com', $customer->getEmail());
        $this->assertSame('cus_xxxx', $customer->getCustomerId());
    }

    /** @test */
    public function check_it_work_retrieve_customer()
    {
        $service = new ServiceAPI(new TestServiceWithCustomer);

        $customer = $service->retrieveCustomer('cus_xxxx');

        $this->assertSame('Hicham', $customer->getName());
        $this->assertSame('hicham.slimani.fr@gmail.com', $customer->getEmail());
        $this->assertSame('cus_xxxx', $customer->getCustomerId());
    }

    /** @test */
    public function check_it_work_delete_customer()
    {
        $service = new ServiceAPI(new TestServiceWithCustomer);

        $this->assertTrue($service->deleteCustomer('cus_xxxx'));
    }

}

class TestServiceWithCustomer implements ServiceInterface
{
    public function __construct(array $keys = []) { }

    public function checkAuthentification() { return false; }

    public function getKeys() { return null; }

    public function getKey($key) { return null; }

    public function createCustomer(array $attributes = []) { return new Customer($attributes); }

    public function retrieveCustomer(string $customerId) { return new Customer(['name' => 'Hicham', 'email' => 'hicham.slimani.fr@gmail.com', 'customer_id' => 'cus_xxxx']); }

    public function deleteCustomer(string $customerId) { return true; }
}
