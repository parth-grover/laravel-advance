<?php
namespace App;

class Postcard
{
    protected static function resolveFacade($name)
    {
        return app()[$name];
    }
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return (self::resolveFacade('Postcard'))
            ->$name(...$arguments);
    }
}
