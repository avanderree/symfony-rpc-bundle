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
use Seven\RpcBundle\XmlRpc\ValueType\BooleanType;

class BooleanTypeTest extends PHPUnit_Framework_TestCase
{
    public function testPacking()
    {
        $typeInstance = new BooleanType($this->getMock("Seven\\RpcBundle\\XmlRpc\\Implementation"));
        $domElement = $typeInstance->pack(new \DOMDocument(), true);

        $this->assertEquals(
            array('value' => array('boolean' => '1')),
            array($domElement->tagName => XmlAssertHelper::xml2array($domElement))
        );
    }

}
