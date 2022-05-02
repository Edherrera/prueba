<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(Category::class, 'status_id');
    }

    public function classroom()
    {
        return $this->belongsTo(Category::class, 'classroom_id');
    }
}
