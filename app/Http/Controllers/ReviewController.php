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
        
        //$review = new Review(); // 新しい Review インスタンスを作成
        $review->fill($input)->save();
        
        return redirect('/cafes/' . $input['cafe_id']);
    }
    //categoryの詳細ページへ
    public function category(Cafe $cafe)
    {
        return view('cafes.category')->with(['cafe' => $cafe]);
    }
}