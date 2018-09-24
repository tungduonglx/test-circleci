<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Temp;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected   $value;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->value    = $value;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'Start...';
        $item           = new Temp();
        $item->value    = $this->value;
        $item->save();
        echo 'Done!';
    }
}
