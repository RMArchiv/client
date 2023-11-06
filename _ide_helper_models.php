<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ApiDate
 *
 * @property int $id
 * @property string $endpoint
 * @property \Illuminate\Support\Carbon $last_update
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereEndpoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereUpdatedAt($value)
 */
	class ApiDate extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ApiDate
 *
 * @property int|null $id
 * @property string|null $endpoint
 * @property Carbon|null $last_update
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereEndpoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApiDate whereUpdatedAt($value)
 */
	class ApiDate extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereApiDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereInvisibleOnStartPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereIsBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereMakerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereReleaseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereWebsiteUrl($value)
 */
	class Game extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereFilesize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereForbidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereGamefileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereInstalled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereUpdatedAt($value)
 */
	class Gamefile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Game
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $game_id
 * @property string $title
 * @property string $subtitle
 * @property \Illuminate\Support\Carbon $api_date
 * @property string $desc
 * @property int $views
 * @property string $website_url
 * @property \Illuminate\Support\Carbon $release_date
 * @property int $maker_id
 * @property int $release_type
 * @property int $is_banned
 * @property int $invisible_on_start_page
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereApiDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereInvisibleOnStartPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereIsBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereMakerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereReleaseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereWebsiteUrl($value)
 */
	class Game extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gamefile
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $game_id
 * @property \Illuminate\Support\Carbon $release_date
 * @property int $gamefile_type
 * @property int $filesize
 * @property int $installed
 * @property string $extension
 * @property int $forbidden
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereFilesize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereForbidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereGamefileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereInstalled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamefile whereUpdatedAt($value)
 */
	class Gamefile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

