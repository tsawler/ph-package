<?php namespace Tsawler\Phpackage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

/**
 * Class NewsletterController
 * @package Tsawler\Phpackage
 */
class NewsletterController extends Controller
{

    /**
     * @return mixed
     */
    public static function getEmbeddedNewsletters()
    {
        $news = Newsletter::orderby('created_at', 'desc')
            ->orderby('title')
            ->paginate(12);

        return View::make('phpackage::public.newsletters-embedded')
            ->with('news', $news)
            ->with('page_title', '')
            ->render();

    }


    /**
     * List all
     *
     * @return mixed
     */
    public function getAll()
    {
        $newsletters = Newsletter::orderby('created_at', 'desc')->get();

        return View::make('phpackage::admin.newsletters-all')
            ->with('newsletters', $newsletters)
            ->with('page_name', '');
    }


    /**
     * @return mixed
     */
    public function getEdit()
    {
        $id = Input::get('id');

        if ($id > 0) {
            $item = Newsletter::find($id);
        } else {
            $item = new Newsletter();
        }

        return View::make("phpackage::admin.newsletter-edit")
            ->with('item', $item)
            ->with('item_id', $id);
    }


    /**
     * @return mixed
     */
    public function postEdit()
    {
        if (Input::get('id') == 0)
            $item = new Newsletter();
        else
            $item = Newsletter::find(Input::get('id'));

        $item->title = Input::get('title');
        $item->url = Input::get('url');

        $item->save();

        return Redirect::to('/admin/newsletters/all')
            ->with('message', 'Changes saved');
    }


    /**
     * @return mixed
     */
    public function delete()
    {
        $id = Input::get('id');
        Newsletter::find($id)->delete();

        return Redirect::to('/admin/newsletters/all')
            ->with('message', 'Changes saved');
    }

}
