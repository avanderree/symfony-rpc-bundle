<?php

/*
 * This file is part of the Symfony bundle XmlRpc/Server.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seven\RpcBundle\Tests\XmlRpc\ValueType;
use PHPUnit_Framework_TestCase;
use Seven\RpcBundle\XmlRpc\ValueType\IntegerType;

class IntegerTypeTest extends PHPUnit_Framework_TestCase
{
    public function testPacking()
    {
        $typeInstance = new IntegerType($this->getMock("Seven\\RpcBundle\\XmlRpc\\Implementation"));
        $domElement = $typeInstance->pack(new \DOMDocument(), 123);

        $this->assertEquals(
            array('value' => array('int' => 123)),
            array($domElement->tagName => XmlAssertHelper::xml2array($domElement))
        );
    }

}
