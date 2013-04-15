<?php

/*
 * This file is part of the Symfony bundle XmlRpc/Server.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seven\RpcBundle\Tests\XmlRpc;
use PHPUnit_Framework_TestCase;
use Seven\RpcBundle\XmlRpc\Implementation;

class ImplementationRequestTest extends PHPUnit_Framework_TestCase
{
    public function testRequestReaderWithCorrectCall()
    {
        $requestXml = "<?xml version=\"1.0\"?>\n<methodCall><methodName>examples.getStateName</methodName><params><param><value><i4>41</i4></value></param></params></methodCall>";

        $impl = new Implementation();
        $requestMock = $this->getMock("Symfony\\Component\\HttpFoundation\\Request");
        $requestMock->expects($this->once())
            ->method("getContent")
            ->will($this->returnValue($requestXml));

        $methodCall = $impl->createMethodCall($requestMock);

        $this->assertEquals("examples.getStateName", $methodCall->getMethodName());
        $this->assertEquals(array(41), $methodCall->getParameters());
    }

}
