<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    /**
     * A comment belongs to either a post or a recipe.
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
