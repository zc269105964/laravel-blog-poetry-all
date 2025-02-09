<?php

namespace App\Http\Controllers\Home;

use App\Models\BlogNavShareOne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardOneController extends Controller
{
    /**
     * 卡片列表
     */
    public function index(Request $request)
    {
        $nav_id    = $request->route('nav_id');
        $cardModel = new BlogNavShareOne();
        if ($nav_id) {
            $result_list = $cardModel::where('share_show', 1)->where('nav_id', $nav_id)->orderBy('share_sort', 'desc')->orderBy('id', 'desc')->paginate(8);
        } else {
            $result_list = $cardModel::where('share_show', 1)->orderBy('share_sort', 'desc')->orderBy('id', 'desc')->paginate(8);
        }
        return view('home.card1.index', compact('result_list'));
    }
}
