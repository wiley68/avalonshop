<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Support;

class SupportController extends Controller
{
    /** start support all */
    public function supportall(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        if (($id == null) || ($id == 'all')){
            $supports = Support::all();
        }else{
            $supports = Support::where(['category_id'=>$id])->get();
        }
        return view('support.posts')->with([
            'title' => 'Техническа поддръжка и ревюта | Авалон',
            'description' => 'Техническа поддръжка и ревюта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка',
            'root_categories' => $root_categories,
            'category_id' => $id,
            'supports' => $supports
        ]);
    }
    /** end support all */
    /** start support software */
    public function supportsoftware(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $support = Support::where(['id'=>$id])->first();
        $support->visits += 1;
        $support->save();
        return view('support.post')->with([
            'title' => 'Техническа поддръжка и ревюта на софтуер - ' . $support->name . ' | Авалон',
            'description' => 'Техническа поддръжка и ревюта на софтуер - ' . $support->name . '.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка, софтуер',
            'root_categories' => $root_categories,
            'support'=>$support
        ]);
    }
    /** end support software */
}
