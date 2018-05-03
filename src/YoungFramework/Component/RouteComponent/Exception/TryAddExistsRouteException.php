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
 * This exception is thrown when user try add route which exists yet.
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class TryAddExistsRouteException extends \Exception
{
    public function __construct(string $message = 'You try add exists route! You can see more information in docs. Numver 213')
    {
        parent::__construct($message);
    }
}
