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
        'title', 'slug', 'body', 'description'
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
}
