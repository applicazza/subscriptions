<?php

namespace Applicazza\Subscribership\Models;

use Applicazza\Subscribership\ISubscription;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * @package Applicazza\Subscribership\Models
 */
class Subscription extends Model implements ISubscription
{
    /**
     * @var array
     */
    public $dates = [
        'subscribed_at', 'unsubscribed_at',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $casts = [
        'usage' => 'object',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function subscribable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}