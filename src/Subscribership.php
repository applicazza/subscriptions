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
    protected static $load_migrations = true;

    /**
     *
     */
    public static function skipMigrations()
    {
        static::$load_migrations = false;
    }

    /**
     * @return bool
     */
    public static function loadsMigrations()
    {
        return static::$load_migrations;
    }
}