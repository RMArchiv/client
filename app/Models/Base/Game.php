<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 * 
 * @property int|null $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int|null $game_id
 * @property string|null $title
 * @property string|null $subtitle
 * @property Carbon|null $api_date
 * @property string|null $desc
 * @property int|null $views
 * @property string|null $website_url
 * @property Carbon|null $release_date
 * @property int|null $maker_id
 * @property int|null $release_type
 * @property int|null $is_banned
 * @property int|null $invisible_on_start_page
 *
 * @package App\Models\Base
 */
class Game extends Model
{
	protected $table = 'games';

	protected $casts = [
		'game_id' => 'int',
		'api_date' => 'datetime',
		'views' => 'int',
		'release_date' => 'datetime',
		'maker_id' => 'int',
		'release_type' => 'int',
		'is_banned' => 'int',
		'invisible_on_start_page' => 'int'
	];
}
