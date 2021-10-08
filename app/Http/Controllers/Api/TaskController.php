<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //在參數前面加上類別即為型別提示技巧
    public function test(Request $request, $id)
    {
        //$title = $request->input('title');
        //$data = $request->all();
        $title = $request->title;
        return response()->json(['title'=>$title,'id'=>$id]);
    }
}
