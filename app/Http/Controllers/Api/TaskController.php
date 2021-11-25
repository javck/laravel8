<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    //控制器驗證
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'title' =>'required|max:125',
    //         'salary' => 'required|integer',
    //         'desc' => 'required',
    //         'enabled' => 'required|boolean'
    //     ]);
    //     //驗證成功了，可以保存
    //     $task = Task::create($request->only([
    //         'title','salary','desc','enabled'
    //     ]));

    //     if(isset($task)){
    //         return ['status' => 1 , 'result' => $task];
    //     }else{
    //         return ['status' => 0 , 'message' => '新增工作失敗'];
    //     }

    // }

    //手動建立驗證器
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(),[
    //         'title' =>'required|max:125',
    //         'salary' => 'required|integer',
    //         'desc' => 'required',
    //         'enabled' => 'required|boolean'
    //     ]);
    //     if($validator->fails()){
    //         //驗證失敗的處理
    //         return ['status' => 0 , 'message' => '驗證失敗囉!'];
    //     }
    //     //驗證成功了，可以保存
    //     $task = Task::create($request->only([
    //         'title','salary','desc','enabled'
    //     ]));

    //     if(isset($task)){
    //         return ['status' => 1 , 'result' => $task];
    //     }else{
    //         return ['status' => 0 , 'message' => '新增工作失敗'];
    //     }

    // }

    //透過驗證類別
    public function store(CreateTaskRequest $request)
    {
        //驗證成功了，可以保存
        $task = Task::create($request->only([
            'title','salary','desc','enabled'
        ]));

        if(isset($task)){
            return ['status' => 1 , 'result' => $task];
        }else{
            return ['status' => 0 , 'message' => '新增工作失敗'];
        }

    }

    public function showCgy($id)
    {
        $task = Task::find($id);
        $result = null;
        return $result;
    }
}
