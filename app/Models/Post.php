<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Group;
use App\Models\PostAttachment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'body',
        'user_id',
    ];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
    public function attachment():HasMany
    {
        return $this->hasMany(PostAttachment::class);
    }
}
