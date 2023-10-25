<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function ap(): HasOneThrough {
        return $this->hasOneThrough(AP::class, Link::class, 'point_id', 'id', 'id', 'ap_id');
    }
}
