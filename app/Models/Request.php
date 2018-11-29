<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'request', 'request_time', 'user_id', 'latitude', 'longitude', 'discipline'
    ];

    /**
     * Get the user that owns the request.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}