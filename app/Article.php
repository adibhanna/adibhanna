<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The allowed fields.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'description'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * An article belongs to many tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * fetch the articles by tag.
     *
     * @param $tag
     * @return mixed
     */
    public static function byTag($tag)
    {
        return static::WhereHas('tags', function ($q) use ($tag) {
            $q->where('slug', $tag);
        });
    }


    /**
     * Return a paginated list of articles, and optionally
     * filter them by tag.
     *
     * @param null $tag
     * @return mixed
     */
    public static function listing($tag = null)
    {
        return (!is_null($tag))
            ? static::byTag($tag)->orderBy('created_at', 'desc')->paginate(10)
            : static::orderBy('created_at', 'desc')->paginate(10);
    }
}
