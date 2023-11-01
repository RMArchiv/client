<?php

namespace App\Models;

use App\Models\Base\Game as BaseGame;

class Game extends BaseGame
{
	protected $fillable = [
		'game_id',
		'title',
		'subtitle',
		'api_date',
		'desc',
		'views',
		'website_url',
		'release_date',
		'maker_id',
		'release_type',
		'is_banned',
		'invisible_on_start_page'
	];
}
