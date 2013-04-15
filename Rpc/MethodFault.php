<?php
/*
 * This file is part of the Symfony bundle Seven/Rpc.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Seven\RpcBundle\Rpc;

class MethodFault extends MethodResponse
{
    protected $exception;

    /**
     * @param \Exception $exception
     */

    public function __construct(\Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * @return string
     */

    public function getMessage()
    {
        return $this->getException()->getMessage();
    }

    /**
     * @return string
     */

    public function getCode()
    {
        return $this->getException()->getCode();
    }

    /**
     * @return \Exception
     */

    public function getException()
    {
        return $this->exception;
    }

}
