<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminat\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	// use SoftDelete;
	// protected $table = 'articles';
	protected $primaryKey = 'id';
	public $incrementing = true;
	public $timestamps = true;

	protected $fillable = ['name', 'text', 'img', 'alias'];
	protected $guarded = ['*'];

	protected $dates = ['deleted_at'];
}
