<?php

namespace Encore\Events;

class Proxy extends \Encore\Container\Proxy
{
    /**
     * Get the name of the concrete binding in the container.
     *
     * @return string
     */
    public static function getConcreteBinding()
    {
        return 'events';
    }
}