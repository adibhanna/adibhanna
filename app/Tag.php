<?php

namespace Blog;

use Blog\Article;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The allowed fields.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug'];

    /**
     * A tag belongs to many article.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
