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
 * This exception is thrown when user give invalid route controller
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class InvalidRouteController extends \Exception
{
    public function __construct(string $message = 'You try add route with invalid route controller! (You can see more informations about this exception in docs. Number 211.')
    {
        parent::__construct($message);
    }
}
