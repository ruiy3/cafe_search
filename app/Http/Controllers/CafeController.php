<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Review;

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
    
        return view('cafes.cafe', compact('cafe', 'reviews'));
    }
}
