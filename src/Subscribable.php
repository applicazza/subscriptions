<?php

namespace Applicazza\Subscribership;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;

/**
 * Trait Subscribeable
 * @package Applicazza\Subscribership
 */
trait Subscribable
{
    use HasRelationships;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function subscriptions()
    {
        return $this->morphMany(config('subscriptions.models.subscription'), 'subscribable');
    }

    /**
     * @param \Applicazza\Subscribership\IPlan $plan
     * @return \Applicazza\Subscribership\ISubscription
     */
    public function subscribe(IPlan $plan)
    {
        /** @var \Illuminate\Database\Eloquent\Model|\Applicazza\Subscribership\ISubscriber $this */
        /** @var \Illuminate\Database\Eloquent\Model|\Applicazza\Subscribership\ISubscription $subscription */
        $clazz = config('subscriptions.models.subscription');
        $subscription = new $clazz;
        $subscription->subscribable()->associate($this);
        $subscription->plan()->associate($plan);
        return $subscription->save();
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model|\Applicazza\Subscribership\ISubscription $subscription
     */
    public function unsubscribe(ISubscription $subscription)
    {
        $subscription->unsubscribed_at = Carbon::now();
        $subscription->save();
    }
}