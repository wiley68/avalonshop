<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Category;

class FaqController extends Controller
{
    /** start faq all */
    public function all()
    {
        $root_categories = Category::where(['parent_id' => 0])->get();
        $faqs = Faq::all();

        return view('faqs.all')->with([
            'title' => 'Често задавани въпроси | Авалон',
            'description' => 'Често задавани въпроси.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, въпроси',
            'root_categories' => $root_categories,
            'faqs' => $faqs
        ]);
    }
    /** end faq all */
}
