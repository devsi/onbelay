<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    /**
     * The db table to connect to.
     */
    protected $table = 'gear';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'category'
    ];
}