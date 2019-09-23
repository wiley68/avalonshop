<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsController extends Controller
{
    /** start news all */
    public function all()
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $news = News::where('id', '>', 0)->orderBy('visits', 'DESC')->orderBy('created_at', 'DESC');

        $paginate = 4;

        // result supports paginating
        $all_news_count = $news->count();
        $news = $news->paginate($paginate);

        return view('news.all')->with([
            'title' => 'Новини | Авалон',
            'description' => 'Ноивини за продажба на компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, новини',
            'root_categories' => $root_categories,
            'paginate' => $paginate,
            'news' => $news,
            'all_news_count' => $all_news_count
        ]);
    }
    /** end support all */

    /** start support software */
    public function post(Request $request, $id = null)
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $news = News::where(['id' => $id])->first();
        $ips = explode(",", env('MYIP'));
        if (!in_array(HelpController::getUserIP(), $ips)) {
            $news->visits += 1;
            $news->save();
        }

        return view('news.post')->with([
            'title' => $news->meta_title . ' | Авалон',
            'description' => $news->meta_description,
            'keywords' => $news->meta_keywords,
            'root_categories' => $root_categories,
            'news' => $news
        ]);
    }
    /** end support software */
}
