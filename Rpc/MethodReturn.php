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

class MethodReturn extends MethodResponse
{
    protected $returnValue;
    protected $returnType = null;

    /**
     * @param string $returnValue
     * @param null   $returnType
     */

    public function __construct($returnValue = null, $returnType = null)
    {
        $this->returnType = $returnType;
        $this->returnValue = $returnValue;
    }

    /**
     * @return null|string
     */

    public function getReturnValue()
    {
        return $this->returnValue;
    }

    /**
     * @return null|string
     */

    public function getReturnType()
    {
        return $this->returnType;
    }

}
