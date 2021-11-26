<?php

namespace App\Http\Controllers\Api;

use App\Models\Cgy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CgyController extends Controller
{
    //顯示關聯的工作資料
    public function showTasks($id)
    {
        $cgy = Cgy::find($id);
        $result = $cgy->tasks()->orderBy('id','desc')->get();

        return $result;
    }
}
