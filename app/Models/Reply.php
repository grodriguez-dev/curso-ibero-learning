<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reply
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Topic $topic
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reply whereUserId($value)
 * @mixin \Eloquent
 */
class Reply extends Model
{
    protected $guarded = ["id"];

    protected $perPage = 10;

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
