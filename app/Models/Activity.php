<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(Category::class);
    }

    public function responsibility()
    {
        return $this->belongsTo(Responsibility::class);
    }

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
