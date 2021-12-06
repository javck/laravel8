<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ServerReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 600;
    protected $time;

    /**
     * 建構子，用以初始化屬性
     *
     * @return void
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * 任務處理邏輯
     *
     * @return void
     */
    public function handle()
    {
        if(!$this->time){
            sleep(5);
            //Artisan::call('server:report');
            Log::debug('Server Report 5 seconds');
        }else{
            sleep($this->time);
            Log::debug('Server Report ' . $this->time . ' seconds');
        }
    }
}
