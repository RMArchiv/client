<?php

namespace App\Models;

use App\Models\Base\ApiDate as BaseApiDate;

class ApiDate extends BaseApiDate
{
	protected $fillable = [
		'endpoint',
		'last_update'
	];
}
