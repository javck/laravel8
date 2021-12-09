<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ServerReport extends Command
{
    /**
     * 命令的名稱，用於呼叫命令.
     *
     * @var string
     */
    protected $signature = 'server:report {data?}';

    /**
     * 命令的描述，用於列表的顯示.
     *
     * @var string
     */
    protected $description = 'server report...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 命令作業區.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('data');
        if(!isset($id)){
            Log::debug('server report...');
        }else{
            Log::debug('server report... data:' . $id);
        }
    }
}
