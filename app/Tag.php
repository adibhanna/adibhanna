<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package Blog
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    /**
     * Return the tags that has articles related to them.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function havingArticles()
    {
        return static::has('articles', '>', 0)->get();
    }
}
