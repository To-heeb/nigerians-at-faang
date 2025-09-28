<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MailingListSubscriber extends Model
{
    /** @use HasFactory<\Database\Factories\MailingListSubscriberFactory> */
    use HasFactory;
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'is_verified',
        'verification_token',
        'subscribed_at',
        'unsubscribed_at',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];

    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */
    public function getIsActiveAttribute(): bool
    {
        return $this->is_verified && is_null($this->unsubscribed_at);
    }
}
