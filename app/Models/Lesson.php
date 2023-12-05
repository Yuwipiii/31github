<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','credit','teacher_id'];

    public function teacher(): BelongsTo
    {
       return $this->belongsTo(Teacher::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
