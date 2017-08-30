<?php

namespace Applicazza\Subscribership;

interface ISubscriber
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function subscriptions();

    /**
     * @param \Applicazza\Subscribership\IPlan $plan
     * @return bool
     */
    public function subscribe(IPlan $plan);
}