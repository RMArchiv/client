<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiDate
 * 
 * @property int|null $id
 * @property string|null $endpoint
 * @property Carbon|null $last_update
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models\Base
 */
class ApiDate extends Model
{
	protected $table = 'api_dates';

	protected $casts = [
		'last_update' => 'datetime'
	];
}
