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

namespace YoungFramework\Component\RouteComponent;

use YoungFramework\Component\RouteComponent\Exception\EmptyNecessaryArgumentException;
use YoungFramework\Component\RouteComponent\Exception\TryAddExistsRouteException;
use YoungFramework\Component\RouteComponent\Exception\TryRemoveNotExistsFramework;

/**
 * This class contains a list of routes
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class RouteList
{
    
    /**
     * This array is contains a route list
     * @var array 
     */
    private static $routeList = array();

    /**
     * This function add route to a route list
     * 
     * @param string $routeName
     * @param string $urlToRoute
     * @param string $routeController
     * 
     * @return bool
     */
    public static function addRoute(string $routeName, string $urlToRoute, string $routeController): bool
    {
        if(empty($routeName)  ||
           empty($urlToRoute) ||
           empty($routeController)) {
            
            throw new EmptyNecessaryArgumentException();
        }
        
        foreach(static::getRouteList() as $route)
        {
            if($routeName === $route['name']) {
                throw new TryAddExistsRouteException();
            }
            if($urlToRoute === $route['urlToRoute']) {
                throw new TryAddExistsRouteException();
            }
        }
        
        array_push(static::getRouteList(), [
            'name' => $routeName,
            'controller' => $routeController,
            'urlToRoute' => $urlToRoute
        ]);
        return true;
        
    }
    
    /**
     * This function is used to delete route from route list
     * 
     * @param string $routeName
     * 
     * @return bool
     */
    public static function removeRoute(string $routeName): bool
    {
        if(empty($routeName)) {
            throw new EmptyNecessaryArgumentException();
        }
        $routeList = static::getRouteList();
        
        $exists = 0;
        $routeToRemove = null;
        
        foreach($routeList as $route)
        {
            if($route['name'] == $routeName) {
                
                $routeToRemove = $route;
                
                $exists++;
            }
        }
        
        if(0 === $exists) {
            throw new TryRemoveNotExistsFramework();
        }
        
        array_unshift($routeList, $routeToRemove);
        
        return true;
    }
    
    /**
     * This function return route list.
     * 
     * @return array
     */
    public static function getRouteList(): array
    {
        return static::$routeList;
    }
}
