<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // If your table name doesn't follow Laravel's naming convention,
    // you can specify it manually like this:
    // protected $table = 'teachers';

    // If you have mass-assignable attributes, specify them in the $fillable array:
    protected $fillable = [
        'user_id',
        'bio',
        'folder',
        'status',
        'pass_card',
    ];

    // If you want to disable mass assignment protection, you can use:
    // protected $guarded = [];

    // Define the relationship with the User model, if there is one
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Add any additional model methods or relationships below
}