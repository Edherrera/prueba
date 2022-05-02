<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo(Category::class, 'classroom_id');
    }

    public function subject()
    {
        return $this->belongsTo(Category::class, 'subject_id');
    }

    public function responsibilities()
    {
        return $this->hasMany(Activity::class);
    }
}
