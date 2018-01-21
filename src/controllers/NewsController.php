<?php namespace Tsawler\Phpackage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


/**
 * Class NewsController
 * @package Tsawler\Phpackage
 */
class NewsController extends Controller
{

    /**
     * @return mixed
     */
    public static function getEmbeddedIgniteNews()
    {
        $news = IgniteNewsItem::where('active', '=', '1')
            ->where('news_date', '<=', date('Y-m-d'))
            ->where('category', 'like', '%Planet Hatch%')
            ->orderby('news_date', 'desc')
            ->orderby('title')
            ->limit(4)
            ->get();

        return View::make('phpackage::public.ignite-news-embedded')
            ->with('news', $news)
            ->with('page_title', '')
            ->render();

    }

}
