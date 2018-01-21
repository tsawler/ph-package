<?php namespace Tsawler\Phpackage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


/**
 * Class PostsController
 * @package Tsawler\Phpackage
 */
class PostsController extends Controller
{

    /**
     * @return mixed
     */
    public static function getEmbeddedIgniteBlog()
    {
        $news = IgniteBlogPost::where('active', '=', '1')
            ->where('post_date', '<=', date('Y-m-d'))
            ->where('category', 'like', '%Planet Hatch%')
            ->orderby('post_date', 'desc')
            ->orderby('title')
            ->limit(4)
            ->get();

        return View::make('phpackage::public.ignite-posts-embedded')
            ->with('news', $news)
            ->render();

    }

}
