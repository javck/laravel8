<?php

namespace App\Http\Controllers;

use App\Jobs\ServerReport;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //用來推送任務
    public function sendDispatch($time)
    {
        $newJob = new ServerReport($time);
        dispatch($newJob);
        return 'done';
    }
}
