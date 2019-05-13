<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Artwork
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artwork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artwork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artwork query()
 */
	class Artwork extends \Eloquent {}
}

namespace App{
/**
 * App\Emotion
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Emotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Emotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Emotion query()
 */
	class Emotion extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property-read \App\Artwork $artwork
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Emotion[] $emotions
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post query()
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Artwork[] $artworks
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag query()
 */
	class Tag extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Emotion[] $emotions
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

