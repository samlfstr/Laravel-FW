<?php


namespace App\Models;


class Post
{

    /**
     * @throws \Exception
     */
    public static function find($slug)
    {
        // there are path functions we can use so we can get rid of that ugly code

        /*$path = __DIR__ . "/../resources/posts/$slug.html";*/

        if (!file_exists($path)) {
            // dd('The file doesn\'t exists');
            abort(404);
        }

        return cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));

    }
}
