<?php

use PHPUnit\Framework\TestCase;
use Sepalevy\ServicePaymentsApi\ServiceAPI as Service;
use Sepalevy\ServicePaymentsApi\ServiceInterface;

class ServicePaymentsApiTest extends TestCase
{

    /** @test */
    public function check_checkAuthentification_method()
    {
        $service = new Service(new TestDynamicValueService);

        $this->assertTrue($service->checkAuthentification());
    }

    /** @test */
    public function check_check_method()
    {
        $service = new Service(new TestDynamicValueService);

        $this->assertTrue($service->check());
    }

    /** @test */
    public function check_getKeys_method()
    {
        $service = new Service(new TestDynamicValueService(['id' => '123']));

        $this->assertSame(['id' => '123'], $service->getKeys());
    }

    /** @test */
    public function check_getKey_method()
    {
        $service = new Service(new TestDynamicValueService(['id' => '123']));

        $this->assertNull($service->getKey('random_key'));
    }

    /** @test */
    public function check_getKey_method_with_default_value()
    {
        $service = new Service(new TestDynamicValueService(['id' => '123']));

        $this->assertSame('default value', $service->getKey('random_key', 'default value'));
    }

    /** @test */
    public function check_hasKey_method()
    {
        $service = new Service(new TestDynamicValueService(['id' => '123']));

        $this->assertFalse($service->hasKey('random_key'));
        $this->assertTrue($service->hasKey('id'));
    }


}

class TestService implements ServiceInterface
{
    public function __construct(array $keys = []) { }

    public function checkAuthentification() { return false; }

    public function getKeys() { return null; }

    public function getKey($key) { return null; }
}

class TestDynamicValueService extends TestService
{
    public function __construct(array $keys = []) { $this->keys = $keys; }

    public function checkAuthentification() { return true; }

    public function getKeys() { return $this->keys; }

    public function getKey($key) { return $this->keys[$key] ?? null; }
}
