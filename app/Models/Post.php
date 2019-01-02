<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @package App\Models
 */
class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
		'description',
		'content',
		'category_id'
    ];

    /**
     * @var bool
     */
    public $timestamps = true;
}
