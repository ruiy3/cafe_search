<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Category;

class CafeController extends Controller
{
    //cafeを表示する
    public function index(Cafe $cafe)//インポートしたCafeをインスタンス化して$cafeとして使用。
    {
        return view('cafes.index')->with(['cafes' => $cafe -> getPaginateByLimit()]);  
       //blade内で使う変数'cafes'と設定。'cafes'の中身にgetを使い、インスタンス化した$cafeを代入。
    }
    //初めの画面を表示する
    public function show(){
        return view('index');
    }
    
    public function cafe(Cafe $cafe)
    {
        // カフェのレビューをページネーション
        $reviews = $cafe->reviews()->paginate(10);// 1ページあたり10件ずつ表示
    
        // カフェに関連付けられたコメントを取得
        $comments = Comment::whereIn('review_id', $reviews->pluck('id'))->get();
    
        return view('cafes.cafe', compact('cafe', 'reviews', 'comments'));
    }
    
    public function name_search(Request $request)
    {
        $query = $request->input('query');
    
        // クエリを実行し、ページネーションを適用
        $cafes = Cafe::where('cafe_name', 'LIKE', "%{$query}%")
                     ->orWhere('cafe_location', 'LIKE', "%{$query}%")
                     ->orWhere('cafe_explain', 'LIKE', "%{$query}%")
                     ->paginate(5); // 1ページに表示するアイテム数を指定

        if ($cafes->isEmpty()) {
            // 該当するカフェが見つからない場合のメッセージをビューに渡す
            return view('cafes.search-results', compact('cafes'))->with('message', "該当するカフェが見つかりません。");
        } else {
            // カフェが見つかった場合、結果をビューに渡す
            return view('cafes.search-results', compact('cafes'));
        }
    }
    
    public function kind_search(Request $request)
    {
        $query = $request->input('query');

        // kind でカテゴリを検索
        $cafes = Cafe::whereHas('reviews.category', function ($queryBuilder) use ($query) {
        $queryBuilder->where('kind', $query);
        })->paginate(5);
    
        if ($cafes->isEmpty()) {
            // 該当するカフェが見つからない場合のメッセージをビューに渡す
            return view('cafes.search-results', compact('cafes'))->with('message', "該当するカフェが見つかりません。");
        } else {
            // カフェが見つかった場合、結果をビューに渡す
            return view('cafes.search-results', compact('cafes'));
        }
    }
    
    public function name_search_show(){
        return view('cafes.search-name');
    }
    
    public function kind_search_show(){
        return view('cafes.search-kind');
    }
}
