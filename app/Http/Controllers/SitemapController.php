<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\News;
use App\Product;
use App\Support;
use App\Tag;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(){
        $product = Product::orderBy('created_at', 'desc')->first();
        $manufacturer = Manufacturer::orderBy('created_at', 'desc')->first();
        $tag = Tag::orderBy('created_at', 'desc')->first();
        $category = Category::orderBy('created_at', 'desc')->first();
        $support = Support::orderBy('created_at', 'desc')->first();
        $news = News::orderBy('created_at', 'desc')->first();

        return response()->view('sitemap.index', [
            'product' => $product,
            'manufacturer' => $manufacturer,
            'tag' => $tag,
            'category' => $category,
            'support' => $support,
            'news' => $news
        ])->header('Content-Type', 'text/xml');
    }

    public function products(){
        $products = Product::all();
        
        return response()->view('sitemap.products', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }

    public function manufacturers(){
        $manufacturers = Manufacturer::all();
        
        return response()->view('sitemap.manufacturers', [
            'manufacturers' => $manufacturers,
        ])->header('Content-Type', 'text/xml');
    }

    public function tags(){
        $tags = Tag::all();
        
        return response()->view('sitemap.tags', [
            'tags' => $tags,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories(){
        $categories = Category::all();
        $last_update = Product::orderBy('created_at', 'desc')->first()->created_at;
        
        return response()->view('sitemap.categories', [
            'categories' => $categories,
            'last_update' => $last_update
        ])->header('Content-Type', 'text/xml');
    }

    public function supports(){
        $supports = Support::all();
        $last_update = Support::orderBy('created_at', 'desc')->first()->created_at;
        
        return response()->view('sitemap.supports', [
            'supports' => $supports,
            'last_update' => $last_update
        ])->header('Content-Type', 'text/xml');
    }

    public function main(){
        $last_update = Product::orderBy('created_at', 'desc')->first()->created_at;
        
        return response()->view('sitemap.main', [
            'last_update' => $last_update
        ])->header('Content-Type', 'text/xml');
    }

    public function news(){
        $news = News::all();
        
        return response()->view('sitemap.news', [
            'news' => $news,
        ])->header('Content-Type', 'text/xml');
    }

}
