<?php

namespace Applicazza\Subscribership;

use Applicazza\Subscribership\Models\Plan;

/**
 * Interface ISubscription
 * @package Applicazza\Subscribership
 */
interface ISubscription
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function subscribable();

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan();
}