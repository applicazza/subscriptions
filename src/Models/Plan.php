<?php

namespace Applicazza\Subscribership\Models;

use Applicazza\Subscribership\IPlan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Plan
 * @package Applicazza\Subscribership\Models
 */
class Plan extends Model implements IPlan
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $casts = [
        'details' => 'object',
    ];

    /**
     * @var array
     */
    public $dates = [
        'archived_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany(config('subscriptions.models.subscription'));
    }
}