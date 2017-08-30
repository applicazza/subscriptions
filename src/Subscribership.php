<?php

namespace Applicazza\Subscribership;

/**
 * Class Subscribership
 * @package Applicazza\Subscribership
 */
class Subscribership
{
    /**
     * @var bool
     */
    protected static $skip_migrations = false;

    /**
     *
     */
    public static function skipMigrations()
    {
        static::$skip_migrations = true;
    }

    /**
     * @return bool
     */
    public static function skipsMigrations()
    {
        return static::$skip_migrations;
    }
}