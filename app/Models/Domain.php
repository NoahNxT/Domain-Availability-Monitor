<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'domain',
        'status'
    ];

    /**
     * The users that belong to the role.
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_domain');
    }
}
