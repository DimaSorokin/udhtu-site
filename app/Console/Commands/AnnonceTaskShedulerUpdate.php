<?php

namespace App\Console\Commands;

use App\Announcement;
use Illuminate\Console\Command;

class AnnonceTaskShedulerUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:annonce->update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $records = Announcement::where('status', 0)->get();
        foreach ($records as $record){
            $record->update(['status' => 1]);
        }
    }
}
