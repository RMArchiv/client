<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gamefile
 * 
 * @property int|null $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int|null $game_id
 * @property Carbon|null $release_date
 * @property int|null $gamefile_type
 * @property int|null $filesize
 * @property int|null $installed
 * @property string|null $extension
 * @property int|null $forbidden
 *
 * @package App\Models\Base
 */
class Gamefile extends Model
{
	protected $table = 'gamefiles';

	protected $casts = [
		'game_id' => 'int',
		'release_date' => 'datetime',
		'gamefile_type' => 'int',
		'filesize' => 'int',
		'installed' => 'int',
		'forbidden' => 'int'
	];
}
