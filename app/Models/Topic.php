<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Topic
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Course $course
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reply[] $replies
 * @property-read int|null $replies_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topic onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topic whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topic withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topic withoutTrashed()
 * @mixin \Eloquent
 */
class Topic extends Model
{
    use SoftDeletes;

    protected $guarded = ["id"];

    protected $perPage = 10;

    const PENDING = "PENDING";

    const SOLVED = "SOLVED";

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
