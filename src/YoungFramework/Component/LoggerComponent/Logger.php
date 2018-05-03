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

namespace YoungFramework\Component\LoggerComponent;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * This class is used to logging.
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class Logger implements LoggerInterface 
{
    /**
     * System is unusable.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function emergency(string $message, array $context = array())
    {
        $this->log(LogLevel::EMERGENCY, $message);    
    }
    
    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function alert(string $message, array $context = array())
    {
        $this->log(LogLevel::ALERT, $message);
    }
    
    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function critical($message, array $context = array())
    {
        $this->log(LogLevel::CRITICAL, $message);
    }
    
    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function error($message, array $context = array())
    {
        $this->log(LogLevel::ERROR, $message);
    }
    
    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function warning(string $message, array $context = array())
    {
        $this->log(LogLevel::WARNING, $message);
    }
    
    /**
     * Normal but significant events.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function notice(string $message, array $context = array())
    {
        $this->log(LogLevel::NOTICE, $message);
    }
    
    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function info(string $message, array $context = array())
    {
        $this->log(LogLevel::INFO, $message);
    }
    
    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function debug(string $message, array $context = array())
    {
        $this->log(LogLevel::DEBUG, $message);
    }
    
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
        //TODO: Implement log method.
    }
}
