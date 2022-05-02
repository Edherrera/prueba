<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function statuses()
    {
        return $this->hasMany(UserStatus::class, 'status_id');
    }

    public function classrooms()
    {
        return $this->hasMany(UserStatus::class, 'classroom_id');
    }

    public function teacher_classrooms()
    {
        return $this->hasMany(Responsibility::class, 'classroom_id');
    }

    public function subjects()
    {
        return $this->hasMany(Responsibility::class, 'subject_id');
    }

    public function activity_statuses()
    {
        return $this->hasMany(Activity::class);
    }
}
