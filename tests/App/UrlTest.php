<?php

namespace App;

use App\Url;
use PHPUnit_Framework_TestCase;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class UrlTest extends PHPUnit_Framework_TestCase
{
    protected $object;

    public function setUp()
    {
        $this->object = new Url('http://test.com');
    }

    /**
     * @test
     */
    public function canConvertToString()
    {
        $this->assertEquals('http://test.com',
            (string) $this->object);
    }

    /**
     * @test
     */
    public function canConvertToStringWhenWeChangeUri()
    {
        $this->object->setUri('admin/users');

        $this->assertEquals('http://test.com/admin/users',
            (string) $this->object);
    }

    /**
     * @test
     */
    public function testCanChangeBaseUrl()
    {
        $this->object->setBaseUrl('http://google.com');

        $this->assertEquals('http://google.com',
            (string) $this->object);
    }

    /**
     * @test
     */
    public function canGetAndSetUri()
    {
        $this->object->setUri('admin/products');

        $this->assertEquals('admin/products', $this->object->getUri());
    }
}
