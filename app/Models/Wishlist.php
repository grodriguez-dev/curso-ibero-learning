<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Wishlist
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist whereUserId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wishlist newQuery()
 */
class Wishlist extends Model
{
    protected $fillable = ["course_id", "user_id"];

    protected static function boot() {
        parent::boot();
        if (!app()->runningInConsole()) {
            self::creating(function ($table) {
                $table->user_id = auth()->id();
            });
        }
    }

    public function newQuery() {
        if (auth()->check()) {
            return parent::newQuery()
                ->where("user_id", auth()->id());
        }
        return parent::newQuery();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
