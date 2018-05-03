<?php

/**
 * This file is part of YoungFramework framework
 * 
 * (c) YoungFramework 2018
 * 
 * If you want to see LICENSE file, you can visit https://github.com/YoungFramework/YoungFramework/LICENSE 
 * 
 * @author Mariusz08 < https://github.com/Mariusz08 >
 * @year 2018
 */

namespace YoungFramework\Component\RouteComponent\Exception;

/**
 * This exception is throwed where user sent empty necessary variable to method.
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class EmptyNecessaryArgumentException extends \Exception 
{
    public function __construct(string $message = 'You sent empty necessary variable to method argument. You can see more information on docs. Number 212')
    {
        parent::__construct($message);
    }
}
