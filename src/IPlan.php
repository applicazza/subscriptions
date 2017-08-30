<?php

namespace Applicazza\Subscribership;

/**
 * Interface IPlan
 * @package Applicazza\Subscribership
 */
interface IPlan
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions();
}