<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function index(Cafe $cafe)//インポートしたCafeをインスタンス化して$cafeとして使用。
    {
        return $cafe->get();//$cafeの中身を戻り値にする。
    }
}
