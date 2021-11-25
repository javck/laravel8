<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //顯示關聯的工作資料
    public function showTasks($id)
    {
        $user = User::find($id);
        $result = null;

        return $result;
    }
}
