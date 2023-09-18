<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Cafe;
use App\Models\Category;

class ReviewController extends Controller
{
    //reviewの投稿ページへ
    public function create(Cafe $cafe, Category $category)
    {
       return view('cafes.review')->with(['cafe' => $cafe, 'categories' => $category->get()]);
    }
    //値（投稿）の格納関数
    public function store(Request $request, Cafe $cafe, Review $review)
    {
        $input = $request['review'];
        $input['user_id'] = auth()->user()->id;
        $input['cafe_id'] = $cafe->id; 
        
        // コメントが空でない場合のみ保存
        if (!empty($input['review'])) {
            $review->fill($input)->save();
        }
        
        return redirect('/cafes/' . $input['cafe_id']);
    }
    //categoryの詳細ページへ
    public function show(Cafe $cafe)
    {
        return view('cafes.category')->with(['cafe' => $cafe]);
    }
    //commentの詳細ページへ
    public function comment(Cafe $cafe)
    {
        // カフェのレビューをページネーション
        $reviews = $cafe->reviews()->paginate(10);// 1ページあたり10件ずつ表示
    
        // カフェに関連付けられたコメントを取得
        $comments = Comment::whereIn('review_id', $reviews->pluck('id'))->get();
    
        return view('cafes.cafe', compact('cafe', 'reviews', 'comments'));
    }
}