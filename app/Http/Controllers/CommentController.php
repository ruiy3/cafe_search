<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Cafe;
use App\Models\Review;

class CommentController extends Controller
{
    //commentを表示する
    public function show(Cafe $cafe, Review $review)
    {
        // カフェに関連するコメントを取得
        $comments = Comment::where('review_id', $review->id)->get();
    
        // カフェ情報、レビュー、コメントをビューに渡す
        return view('cafes.comment', compact('cafe', 'review', 'comments'));
    }
    //reviewの投稿ページへ
    public function create(Cafe $cafe, Review $review)
    {
        // カフェに関連するコメントを取得
        $comments = Comment::where('review_id', $review->id)->get();
        
        // カフェ情報、レビュー、コメントをビューに渡す
        return view('cafes.comment_write', compact('cafe', 'review', 'comments'));
    }
    //値（投稿）の格納関数
    public function store(Request $request, Cafe $cafe, Review $review ,Comment $comment)
    {
        $input['comment'] = $request->input('comment');
        $input['user_id'] = auth()->user()->id;
        $input['review_id'] = $review->id;
        
        // コメントが空でない場合のみ保存
        if (!empty($input['comment'])) {
            $comment->fill($input)->save();
        }
        
        return redirect('/cafes/' . $cafe->id);
    }
}
