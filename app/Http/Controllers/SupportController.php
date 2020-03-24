<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ReviewSupport;
use App\Support;
use App\SupportsTags;
use App\Tag;

class SupportController extends Controller
{
    public function getBaseUrl(){
        $hostName = $_SERVER['HTTP_HOST']; 
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
        return $protocol.'://'.$hostName;
    }

    /** start support all */
    public function supportall(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        if (($id == null) || ($id == 'all')){
            $supports = Support::where('id' ,'>' ,0);
        }else{
            $supports = Support::where(['category_id'=>$id]);
        }

        $paginate = 5;
        $queries = [];

        $all_tags_ids = [];
        $all_supports_tags = SupportsTags::all();
        foreach ($all_supports_tags as $all_support_tag) {
            $all_tags_ids[] = $all_support_tag->tag_id;
        }
        $all_tags = Tag::whereIn('id', $all_tags_ids)->get();

        // Get tag requests
        $supports_ids = [];
        if (!empty(request('tag'))){
            // Get supports_tags
            $supports_tags = SupportsTags::where(['tag_id'=>request('tag')])->get();
            foreach ($supports_tags as $support_tag) {
                $supports_ids[] = $support_tag->support_id;
            }
            // filter products
            $supports = $supports->whereIn('id', $supports_ids);
            // save queries
            $queries['tag'] = request('tag');
        }

        // result supports paginating
        $all_supports_count = $supports->count();
        $supports = $supports->paginate($paginate)->appends($queries);

        $best_supports_count = Support::count();
        if ($best_supports_count >= 3){
            $best_supports_count = 3;
        }
        $best_supports = Support::orderBy('visits', 'DESC')->get()->take($best_supports_count);

        return view('support.posts')->with([
            'title' => 'Техническа поддръжка и ревюта | Авалон',
            'description' => 'Техническа поддръжка и ревюта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка',
            'root_categories' => $root_categories,
            'category_id' => $id,
            'supports' => $supports,
            'all_tags' => $all_tags,
            'all_supports_count'=>$all_supports_count,
            'paginate'=>$paginate,
            'best_supports' => $best_supports,
            'baseurl' => $this->getBaseUrl()
        ]);
    }
    /** end support all */
    /** start support software */
    public function supportsoftware(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $support = Support::where(['id'=>$id])->first();
        $ips = explode(",", env('MYIP'));
        if (!in_array(HelpController::getUserIP(), $ips)) {
            $support->visits += 1;
            $support->save();
        }

        $tags_ids = [];
        $supports_tags = SupportsTags::where(['support_id' => $id])->get();
        foreach ($supports_tags as $support_tag) {
            $tags_ids[] = $support_tag->tag_id;
        }
        $tags = Tag::whereIn('id', $tags_ids)->get();
        $all_tags_ids = [];
        $all_supports_tags = SupportsTags::all();
        foreach ($all_supports_tags as $all_support_tag) {
            $all_tags_ids[] = $all_support_tag->tag_id;
        }
        $all_tags = Tag::whereIn('id', $all_tags_ids)->get();

        $best_supports_count = Support::count();
        if ($best_supports_count >= 3){
            $best_supports_count = 3;
        }
        $best_supports = Support::orderBy('visits', 'DESC')->get()->take($best_supports_count);

        $same_supports_count = Support::where(['category_id' => $support->category_id])->count();
        if ($same_supports_count >= 3){
            $same_supports_count = 3;
        }
        $same_supports = Support::where(['category_id' => $support->category_id])->get()->take($same_supports_count);

        // get reviews
        $reviews_support = ReviewSupport::where(['support_id' => $support->id])->get();

        return view('support.post')->with([
            'title' => $support->meta_title . ' | Авалон',
            'description' => $support->meta_description,
            'keywords' => $support->meta_keywords,
            'root_categories' => $root_categories,
            'support'=>$support,
            'tags' => $tags,
            'all_tags' => $all_tags,
            'best_supports' => $best_supports,
            'same_supports' => $same_supports,
            'reviews_support' => $reviews_support,
            'baseurl' => $this->getBaseUrl()
        ]);
    }
    /** end support software */
}
